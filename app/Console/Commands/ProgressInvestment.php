<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ProgressInvestment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'progress:investment {user_id} {investment_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Progress the user investment';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::find($this->argument('user_id'));

        $investment = $user->investments()->where('uuid', '=', $this->argument('investment_id'))->get()[0];

        if ($investment->exists()) {
            $investment->load('runtime');

            $amount = $investment->amount;
            $percentage = $investment->percentage;
            $duration = $investment->duration;
            $profit = 0;

            $count = 0;

            $profit += $amount * ($percentage / 100);

            if ($investment->status === 'Progressing') {
                if ($investment->runtime) {
                    $date = new Carbon($investment->runtime->end_date);
                    if ($date->diffInDays() >= $investment->runtime->count) {
                        $investment->update([
                            'profit' => $profit
                        ]);

                        $investment->runtime()->update([
                            'count' => $count++
                        ]);
                    }

                    $this->info('Investment has been updated');
                }else {
                    $end_date = new Carbon($investment->date_invested);
                    
                    $end_date->addDays($duration);
                    
                    $instance = $investment->runtime()->create([
                        'end_date' => $end_date
                    ]);

                    $date = new Carbon($instance->runtime->end_date);
                    
                    if ($date->diffInDays() >= $instance->runtime->count) {
                        $instance->update([
                            'profit' => $profit
                        ]);

                        $instance->runtime()->update([
                            'count' => $count++
                        ]);
                    }
                    $this->info('Investment has been updated');
                }
            }else {
                $this->info('This investment is not yet running');
            }
        }else {
            $this->info('This user has no investments yet');
        }

    }
}
