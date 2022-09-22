<?php
namespace App\Actions;

use App\Models\User;


abstract class Bitcoin {
    public static function set(User $user)
    {
       return $user->account()->update([
            'bitcoin' =>  request()->bitcoin_wallet
        ]);
    }
}
