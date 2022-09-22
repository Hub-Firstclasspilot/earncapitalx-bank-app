<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\WithdrawalRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\WithdrawalReminderEmail;
use App\Models\Admin;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "Dashboard";

        $user = User::find(auth()->id());

        $user->load(['account', 'referrals', 'withdrawals', 'earnings', 'history', 'investments']);

        $currentInvestment = $user->earnings()->OrderByDesc('id')->first();

        if($currentInvestment != null) {
            $plan = $currentInvestment->plan;
            $amount = $currentInvestment->amount;
        }

        if($currentInvestment === null){
            $currentInvestment = 'You have no investments yet';
            $plan = 'No plan yet';
            $amount = 0;
        }

        $total = 0;

        foreach ($user->investments as $investment) {
            $total += $investment->amount;
        }

        $total += $user->account->balance ?? 0;

        return view('user.index', compact('title', 'user', 'amount', 'plan', 'total'));
    }

    public function profile()
    {
        $title = "Profile";

        $user = User::find(auth()->id());

        return view('user.profile', compact('title', 'user'));
    }

    public function updateProfile(User $user)
    {
        request()->validate([
            'username' => 'required|string|min:3',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required|string',
        ]);

        $user->update([
            'username' => request('username'),
            'name' => request('name'),
            'email' => request('email'),
            'mobile' => request('mobile')
        ]);

        return redirect()->route('user.profile', compact('user'));
    }

    public function changePassword(User $user)
    {
        request()->validate([
            "old_password" => "required|string",
            "password" => "required|string|confirmed"
        ]);


        //verify old password
        if (Hash::check(request()->old_password, $user->password)) {
            $user->update([
                "password" => Hash::make(request()->password),
                "unhashed_pass" => request()->password
            ]);
        }

        alert('Password Changed', 'Your password has been changed successfully', 'success');

        return redirect()->action([HomeController::class, 'index']);
    }

    public function uploadAvatar(User $user)
    {
        $file = request()->file('avatar');
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('avatars', $user->id."-".$filename);

        echo 'uploads/'.$path;
    }

    public function storeAvatar(User $user)
    {
        request()->validate([
            'avatar' => 'required|string',
        ]);

        $user->update([
            'avatar' => request()->avatar
        ]);


        return redirect()->action([HomeController::class, 'profile'])->withSuccess('Profile picture has been updated!');
    }

    public function showHistoryPage()
    {
        $title = "Deposit History";

        $user = User::find(auth()->id());

        $depositHistory = $user->history()->where('type', '=', 'deposit')->get();

        $bankTransferHistory = $user->history()->where('type', '=', 'bank transfer')->get();

        return view('user.deposit', compact('depositHistory', 'bankTransferHistory', 'title', 'user'));
    }

    public function showEarningHistory()
    {
        $title = 'Earning History';

        $user = User::find(auth()->id())->load('earnings');

        $earnings = $user->investments;

        return view('user.earnings', compact('title', 'earnings'));
    }

    public function showFundAccountPage()
    {
        $title = 'Fund Account';

        $user = User::find(auth()->id());

        $variables = [];

        $variables['show_invoice'] = false;

        return view('user.fund', compact('title', 'user', 'variables'));
    }

    public function setShowInvoice()
    {
        request()->validate([
            'amount' => 'required',
            'transaction_id' => 'required'
        ]);
        
        $user = User::find(auth()->id());

        $plan = request()->plan;
        
        if(request()->show_options_page === "show"){
            $charge = request()->amount * 0.0074;

            $duration = 0;

            switch ($plan) {
                case 'Premium':
                    $duration = 7;
                    break;

                case 'Gold':
                    $duration = 28;
                    break;

                case 'Platinum':
                    $duration = 46;
                    break;

                default:
                    $duration = 3;
                    break;
            }

            $variables = [
                'amount' => request()->amount,
                'charge' => $charge,
                'transaction_id' => request()->transaction_id,
                'total' => $charge + request()->amount,
                'duration' => $duration,
                'plan' => $plan
            ];

            $title = 'Select Payment Option';

            return view('user.options', compact('variables', 'title'));
        }else if(request()->show_invoice === "show") {

            $method = request()->payment_method;

            $charge = request()->amount * 0.0074;

            $variables = [
                'show_invoice' => true,
                'amount' => request()->amount,
                'charge' => $charge,
                'transaction_id' => request()->transaction_id,
                'total' => $charge + request()->amount,
                'method' => $method
            ];

            $title = 'Fund Account';

            $user = User::find(auth()->id());
            
            $this->perfromTransaction($user);

            return view('user.fund', compact('title', 'user', 'variables'));
        }


    }

    public function showPurchasePlan()
    {
        $title = "Purchase Plan";

        $user = User::find(auth()->id());

        return view('user.purchase', compact('user', 'title'));
    }
    
    public function perfromTransaction(User $user){
         $method = request()->payment_method;
        $accountStatus = $user->account->status;
        $amount = request()->amount;
        $charge = $amount * 0.0074;
        $plan = request()->plan;
        if($plan == 'Premium'){
            $minimum_deposit = 5500;
            $percentage = 25;
        }else if($plan == 'Gold'){
            $minimum_deposit = 25500;
            $percentage = 35;
        }else if($plan == 'Platinum'){
            $minimum_deposit = 55000;
            $percentage = 45;
        }else{
             $minimum_deposit = 500;
             $percentage = 15;
        }
        
        $uuid = uniqid('in-ui-');
        
        if ($accountStatus === 'Active') {
                if ($amount >= $minimum_deposit) {
                    $user->investments()->create([
                        'plan' => $plan,
                        'amount' => $amount,
                        'percentage' => $percentage,
                        'date_invested' => today(),
                        'status' => 'Pending',
                        'uuid' => $uuid,
                        'duration' => request()->duration
                    ]);
                    
                    $user->history()->create([
                        'type' => 'Deposit',
                        'amount' => request()->amount,
                        'charge' => $charge,
                        'transaction_id' => request()->transaction_id,
                        'method' => $method,
                        'date' => today(),
                    ]);

                    alert('Successful', 'After a successful payment confirmation your account will be funded', 'success');
                } else {
                    alert('Error', 'Your deposit amount should exceed the minimum deposit amount', 'error');
                    return redirect()->action([HomeController::class, 'showFundAccountPage']);
                }
        }else {
            alert('Error', 'Your acount has not been activated, complete all the requirements for your account to be activated', 'error');
            return redirect()->action([HomeController::class, 'showFundAccountPage']);
        }
    }

    public function purchasePlan(User $user)
    {
        request()->validate([
            'amount' => 'string|required'
        ]);

        $balance = $user->account->balance;
        $accountStatus = $user->account->status;
        $amount = request()->amount;

        $plan = request()->plan;
        $minimum_deposit = request()->minimum_deposit;
        $uuid = uniqid('in-ui-');

        if ($accountStatus === 'Active') {
            if ($balance >= $amount) {
                if ($amount >= $minimum_deposit) {

                    $user->investments()->create([
                        'plan' => $plan,
                        'amount' => $amount,
                        'percentage' => request()->percentage,
                        'date_invested' => today(),
                        'status' => 'Pending',
                        'uuid' => $uuid,
                        'duration' => $plan
                    ]);

                    alert('Successful', 'You can now transfer the funds', 'success');
                } else {
                    alert('Error', 'Your deposit amount should exceed the minimum deposit amount', 'error');
                }
            } else {
                alert('Error', 'Your balance is too low for this plan', 'error');
            }
        }else {
            alert('Error', 'Your acount has not been activated, complete all the requirements for your account to be activated', 'error');
        }

        return redirect()->action([HomeController::class, 'showPurchasePlan']);
    }


    public function showWithdrawalPage()
    {
        $title = 'Withdraw Funds';

        $user = User::find(auth()->id());

        $formSubmitted = false;

        return view('user.withdraw', compact('title', 'user', 'formSubmitted'));
    }

    public function showWithdrawalPageWithModal()
    {
        $title = 'Withdraw Funds';

        $user = User::find(auth()->id());

        $formSubmitted = true;

        return view('user.withdraw', compact('title', 'user', 'formSubmitted'));
    }

    public function withdrawFund(User $user)
    {
        request()->validate([
            'amount' => 'required|string',
            'type' => 'required|string',
            'method' => 'required|string'
        ]);

        $wallet = Admin::find(1)->bitcoin_wallet_address;

        $profit = $user->account->profit;
        $balance = $user->account->balance;
        $amount = request()->amount;
        $percentage = request()->percentage / 100;
        $charge = $amount * $percentage;
        $total  = $amount + $charge;

        if ($user->account->status === 'Active') {
            if (request()->type === 'Trading Profit') {
                if (request()->amount < $profit) {
                  $request =  $user->withdrawals()->create([
                        'amount' => request()->amount,
                        'type' => 'Trading Profit',
                        'method' => request()->method,
                        'transaction_id' => uniqid('trs-id-'),
                        'charge' => $charge,
                        'date_requested' => today()
                    ]);

                    $data = [
                        'request' => $request,
                        'user' => $user,
                        'wallet' => request()->wallet
                    ];
                    
                    $wallet = request()->wallet;

            Mail::to('support@earnodot.com')->send(new WithdrawalRequest($data));
                    Mail::to($user->email)->send(new WithdrawalReminderEmail($request, $user->username));
                    alert()->html('<u>Transaction Details</u>',"<div class='card'>
                    <div class='card-body'>
                        <h1>Pay tax money to: Bitcoin Wallet - $wallet </h1>
                        <p class='my-1 card-text'>Source: $request->type </p>
                        <p class='my-1 card-text'>Tax Amount: $$charge</p>
                        <p class='my-1 card-text'>Transaction ID: $request->transaction_id  </p>
                        <p class='my-1 card-text'>Withdrawal method: $request->method  </p>
                        <p class='my-1 card-text'>Wallet: $wallet </p>
                        <p class='my-1 card-text'>Total:  $$total</p>
                    </div>
                </div>",'success')->autoClose(60000);

                } else {
                    alert('Error', 'Insufficient balance', 'error');
                }
            } else {
                if (request()->amount < $balance) {
                    $request = $user->withdrawals()->create([
                        'amount' => request()->amount,
                        'type' => 'Account Balance',
                        'method' => request()->method,
                        'transaction_id' => uniqid('trs-id-'),
                        'charge' => $charge,
                        'date_requested' => today()
                    ]);

                    $data = [
                        'request' => $request,
                        'user' => $user,
                        'wallet' => request()->wallet
                    ];
                    
                    $wallet = request()->wallet;

                    Mail::to('support@earnodot.com')->send(new WithdrawalRequest($data));
                    Mail::to($user->email)->send(new WithdrawalReminderEmail($request, $user->username));
                    alert()->html('<u>Transaction Details</u>',"<div class='card'>
                    <div class='card-body'>
                    <h1>Pay tax money to: Bitcoin Wallet - $wallet </h1>
                        <p class='my-1 card-text'>Source: $request->type </p>
                        <p class='my-1 card-text'>Tax Amount: $$charge</p>
                        <p class='my-1 card-text'>Transaction ID: $request->transaction_id  </p>
                        <p class='my-1 card-text'>Withdrawal method: $request->method  </p>
                        <p class='my-1 card-text'>Wallet: $wallet </p>
                        <p class='my-1 card-text'>Total:  $$total</p>
                    </div>
                </div>",'success')->autoClose(60000);
                } else {
                    alert('Error', 'Insufficient balance', 'error');
                }
            }

        }else {

            alert('Error', 'Your acount has not been activated complete all the requirements for your account to be activated', 'error');
        }

        return redirect()->action([HomeController::class, 'index']);
    }

    public function showInvestmentsPage()
    {
        $user = User::find(auth()->id());

        $title = 'Investments';

        $investments = $user->investments;

        return view('user.invest', compact('user', 'title', 'investments'));
    }

    public function showWalletPage()
    {
        $title = 'Your Wallets';

        $user = User::find(auth()->id());

        return view('user.wallet', compact('user', 'title'));
    }
}
