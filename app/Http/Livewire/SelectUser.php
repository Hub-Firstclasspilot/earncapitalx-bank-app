<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SelectUser extends Component
{
    public $users;

    public $investments = [];

    public $user;

    public function mount()
    {
        $this->users = User::all();
    }

    public function updatedUser()
    {
        $this->investments = User::find($this->user)->investments;
    }

    public function render()
    {
        return view('livewire.select-user');
    }
}
