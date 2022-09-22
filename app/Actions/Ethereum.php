<?php

namespace App\Actions;

use App\Models\User;

abstract class Ethereum
{
    static public function set(User $user)
    {
        return $user->account()->update([
            'ethereum' => request()->ethereum_wallet
        ]);
    }
}
