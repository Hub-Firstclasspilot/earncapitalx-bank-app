<?php

namespace App\Actions;

use App\Models\User;

abstract class Litecoin
{
    static public function set(User $user)
    {
        return $user->account()->update([
            'litecoin' => request()->litecoin_wallet
        ]);
    }
}
