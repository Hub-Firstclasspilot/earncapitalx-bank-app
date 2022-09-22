<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class EditBalance extends Component
{
    public $users;

    public $user;

    public $balance;

    public function mount()
    {
        $this->users = User::all();
    }

    public function updatedUser()
    {
        $this->balance = User::find($this->user)->account->balance;
    }

    public function render()
    {
        return view('livewire.edit-balance');
    }
}
