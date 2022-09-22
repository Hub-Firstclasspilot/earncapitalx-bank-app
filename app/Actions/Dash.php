<?php
namespace App\Actions;

use App\Models\User;

abstract class Dash {
    static public function set(User $user)
    {
        return $user->account()->update([
            'dash' => request()->dash_wallet
        ]);
    }
}
