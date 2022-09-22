<?php
namespace App\Actions;

use App\Models\User;

abstract class BitcoinCash
{
    static public function set(User $user)
    {
        return $user->account()->update([
            'bitcoin_cash' => request()->bitcoin_cash_wallet
        ]);
    }
}
