<?php

namespace App\Actions;

use App\Models\User;

abstract class Stellar
{
    static public function set(User $user)
    {
        return $user->account()->update([
            'stellar' => request()->stellar_wallet
        ]);
    }
}
