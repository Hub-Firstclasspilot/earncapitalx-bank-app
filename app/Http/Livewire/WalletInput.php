<?php

namespace App\Http\Livewire;

use App\Actions\Bitcoin;
use App\Actions\BitcoinCash;
use App\Actions\Dash;
use App\Actions\Ethereum;
use App\Actions\Litecoin;
use App\Actions\Stellar;
use Livewire\Component;
use App\Models\User;

class WalletInput extends Component
{
    public $value;

    public $route;

    public $action;

    public $user;

    public function mount($route, $value, $action)
    {
        $this->route = $route;

        $this->value = $value;

        $this->action;

        $this->user = User::find(auth()->id());

        $this->user->load('account');
    }

    public function handleSubmit()
    {
        switch ($this->action) {
            case 'bitcoin':
                Bitcoin::set($this->user);
                break;

            case 'bitcoin_cash':
                BitcoinCash::set($this->user);
                break;

            case 'litecoin':
                Litecoin::set($this->user);
                break;

            case 'dash':
                Dash::set($this->user);
                break;

            case 'stellar':
                Stellar::set($this->user);
                break;

            default:
                Ethereum::set($this->user);
                break;
        }
    }

    public function render()
    {
        return view('livewire.wallet-input');
    }
}
