<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class WalletController extends Controller
{
    public function bitcoinWallet(User $user)
    {
        request()->validate([
            'address' => 'required|string'
        ]);

        $user->account()->update([
            'bitcoin' => request()->address
        ]);

        request()->session()->flash('message', 'Your bitcoin wallet address has been saved successfully');

        return redirect()->action([HomeController::class, 'showWalletPage']);
    }

    public function bitcoinCashWallet(User $user)
    {
        request()->validate([
            'address' => 'required|string'
        ]);

        $user->account()->update([
            'bitcoin_cash' => request()->address
        ]);

        request()->session()->flash('message', 'Your bitcoin cash wallet address has been saved successfully');

        return redirect()->action([HomeController::class, 'showWalletPage']);
    }

    public function litecoinWallet(User $user)
    {
        request()->validate([
            'address' => 'required|string'
        ]);

        $user->account()->update([
            'litecoin' => request()->address
        ]);

        request()->session()->flash('message', 'Your litecoin wallet address has been saved successfully');

        return redirect()->action([HomeController::class, 'showWalletPage']);
    }

    public function ethereumWallet(User $user)
    {
        request()->validate([
            'address' => 'required|string'
        ]);

        $user->account()->update([
            'ethereum' => request()->address
        ]);

        request()->session()->flash('message', 'Your ethereum wallet address has been saved successfully');

        return redirect()->action([HomeController::class, 'showWalletPage']);
    }

    public function stellarWallet(User $user)
    {
        request()->validate([
            'address' => 'required|string'
        ]);

        $user->account()->update([
            'stellar' => request()->address
        ]);

        request()->session()->flash('message', 'Your stellar wallet address has been saved successfully');

        return redirect()->action([HomeController::class, 'showWalletPage']);
    }

    public function dashWallet(User $user)
    {
        request()->validate([
            'address' => 'required|string'
        ]);

        $user->account()->update([
            'dash' => request()->address
        ]);

        request()->session()->flash('message', 'Your dash wallet address has been saved successfully');

        return redirect()->action([HomeController::class, 'showWalletPage']);
    }
}
