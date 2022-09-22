<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class SelectWithdrawal extends Component
{
    public $user;

    public $withdrawals = [];

    public $users;

    public function mount()
    {
        $this->users = User::all();
    }

    public function updatedUser()
    {
        $this->withdrawals = User::find($this->user)->withdrawals;
    }

    public function render()
    {
        return view('livewire.select-withdrawal');
    }
}
