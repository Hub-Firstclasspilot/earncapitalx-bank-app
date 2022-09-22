<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class EditRevenue extends Component
{
    public $user;
    public $users;
    public $old_balance;

    public function mount()
    {
        $this->users = User::all();
    }

    public function updatedUser()
    {
        $this->old_balance = User::find($this->user)->investments->balance;
    }

    public function render()
    {
        return view('livewire.edit-revenue');
    }
}
