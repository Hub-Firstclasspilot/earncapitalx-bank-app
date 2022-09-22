<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InvestmentPlan extends Component
{
    public $plans;

    public $plan;

    public $percentage;

    public $duration;

    public $status;

    public function mount($plans)
    {
        $this->plans = $plans;
    }

    public function updatedPlan()
    {
        if(is_object($this->plan)){
            $this->percentage = $this->plan->percentage;
            $this->duration = $this->plan->duration;
            $this->status = $this->plan->status;
        }
    }

    public function render()
    {
        return view('livewire.investment-plan');
    }
}
