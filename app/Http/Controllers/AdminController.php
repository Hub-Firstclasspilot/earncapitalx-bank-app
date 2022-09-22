<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = User::all();

        return view('admin.index', compact('users'));
    }
    
    public function setWallet()
    {
        $admin = Admin::find(auth()->id());
        
        if($admin->update([
            'wallet_address' => request()->wallet_address
            ])){
            alert('Successful', 'You have updated the Bitcoin wallet address', 'success');
        }
        
        return redirect()->action([AdminController::class, 'index']);
    }

    public function userDetails(User $user)
    {
        $title = 'User Details';

        return view('admin.details', compact('user'));
    }

    public function activateUser(User $user)
    {
        if($user->account()->update([
            'status' => request()->status
        ])){
         if (request()->status === 'Active') {
            alert('Successful', 'This user has been activated', 'success');
         }else {
            alert('Successful', 'This user has been deactivated', 'success');
         }
        }

        return redirect()->action([AdminController::class, 'userDetails'], compact('user'));
    }

    public function deposit()
    {
        $user = User::find(request()->user_id);
        $profit = $user->account->profit;

        if($user->account()->update([
            'profit' => request()->added_profit + $profit
        ])){
            alert('Success', "You have increased this user's profit",'success');
        }

        return redirect()->action([AdminController::class, 'userDetails'], compact('user'));
    }

    public function setTransferRule(User $user)
    {
        request()->validate([
            'transfer_rule' =>'required'
        ]);

        if($user->account()->update([
            'account_limit' => request()->transfer_rule
        ])){
            alert('Successful', 'Rule has been set on account', 'success');
        }

        return redirect()->action([AdminController::class, 'userDetails'], compact('user'));
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user->delete()) {
            alert('Successful', 'The user account has been deleted', 'success');
        }else{
            alert('Successful', 'The user account has been deleted', 'error');
        }

        return redirect()->action([AdminController::class, 'index']);
    }

    public function deletePlan(User $user)
    {
        request()->validate([
            'uuid' => 'required|string'
        ]);

        $transaction = $user->investments()->where('uuid', '=', request()->uuid)->get()[0];

        if ($transaction->delete()) {
            alert('Successful', 'Plan has been deleted', 'seccess');
        }

        return redirect()->action([AdminController::class, 'userDetails'], compact('user'));
    }

    public function transferDetails(User $user)
    {
        request()->validate([
            'transaction_id' => 'required|string'
        ]);

        $transaction = $user->investments()->where('transaction_id', '=', request()->transaction_id)->get()[0];

        return view('admin.approve-transfer', compact('transaction'));
    }

    public function limitAccount(User $user)
    {
        request()->validate([
            'balance' => 'required|string'
        ]);

        if ($user->account()->update([
            'balance' => request()->balance
        ])) {
           alert('Successful', 'Account balance has been edited', 'success');
        }

        return redirect()->action([AdminController::class, 'userDetails'], compact('user'));
    }

    public function editPlan(User $user)
    {
        request()->validate([
            'status' => 'required|string',
            'duration' => 'required|string',
            'percentage' => 'required|string',
            'uuid' => 'required|string'
        ]);

        $investment = $user->investments()->where('uuid', '=', request()->uuid)->get()[0]->load('runtime');
        
        
        $user->account()->update([
            'plan' => $investment->plan,
            'percentage' => $investment->duration,
            'duration' => request()->duration
        ]);

        if ($investment->update([
            'status' => request()->status,
            'duration' => request()->duration,
            'percentage' => request()->percentage
        ])) {

            if ($investment->status === 'Progressing') {
                Artisan::call('progress:investment', [
                    'user_id' => $user->id,
                    'investment_id' => $investment->uuid
                ]);
            }

            alert('Successful', 'Investment editing was successful', 'success');
        }

        return redirect()->action([AdminController::class, 'userDetails'], compact('user'));
    }

    public function approveTransfer(User $user)
    {
        $transaction = $user->withdrawals()->where('id', '=', request()->transaction_id)->get()[0];
        $amount = $transaction->amount + $transaction->charge;
        $initialProfit = $user->account->profit;
        $initialBalance = $user->account->balance;
        
        $type = $transaction->type;
        
        //deduct the amount from the user's balance
        if($type == 'Trading Profit'){
            if($user->account->profit < $amount){
                alert('Info','This transaction cannot be processed', 'info');
                return redirect()->action([AdminController::class, 'userDetails'], compact('user'));
            }
            $user->account()->update([
                'profit' => $initialProfit - $amount
                ]);
        }else if($type == 'Account Balance'){
            if($user->account->balance < $amount){
                alert('Info','This transaction cannot be processed', 'info');
                return redirect()->action([AdminController::class, 'userDetails'], compact('user'));
            }
            $user->account()->update([
                'balance' => $initialBalance - $amount
                ]);
        }

        if ($transaction->update([
            'date_approved' => today()
        ])) {
            alert('Successful', 'This transfer has been approved', 'success');
        }else {
            alert('Error', 'Something went wrong. Contact your technical officer', 'error');
        }

        return redirect()->action([AdminController::class, 'userDetails'], compact('user'));
    }

    public function setWithdrawalCommission(User $user)
    {
        request()->validate([
            'withdrawal_commision' => 'required|numeric'
        ]);

        if ($user->account()->update([
            'withdrawal_commision' => request()->withdrawal_commision
        ])) {
            alert('Successful', 'Withdrawal commission on this account has been set', 'success');
        }

        return redirect()->action([AdminController::class, 'userDetails'], compact('user'));
    }
}
