<?php

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\Auth\Admin\LoginController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('success', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Main App Front Routes
Route::get('/', [PageController::class, 'index'])->name('main.index');
Route::get('cryptocurrencies', [PageController::class, 'showCryptoPage'])->name('main.crypto');
Route::get('experts', [PageController::class, 'showExpertsPage'])->name('main.experts');
Route::get('events', [PageController::class, 'showEventsPage'])->name('main.events');
Route::get('events/details', [PageController::class, 'showEventDetailsPage'])->name('main.events.details');
Route::get('tabs', [PageController::class, 'showTabsPage'])->name('main.tabs');
Route::get('contacts', [PageController::class, 'showContactsPage'])->name('main.contacts');
Route::get('about', function(){
    $title = 'About Us';

    return view('pages.about', compact('title'));
})->name('main.about');

Auth::routes();

// Admin Routes
    //Authentication routes for the admin
    Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('admin/login', [LoginController::class, 'login'])->name('admin.login.post');
    Route::post('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

    // Main Page Routes
    Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('admin/deposit', [AdminController::class, 'deposit'])->name('admin.deposit');
    Route::post('admin/deposit/bank', [AdminController::class, 'bankDeposit'])->name('admin.bank-deposit');
    Route::post('admin/add-earning', [AdminController::class, 'addEarning'])->name('admin.add-earning');
    Route::delete('admin/investment', [AdminController::class, 'deleteInvestment'])->name('admin.delete.investment');
    Route::delete('admin/delete/{user}', [AdminController::class, 'deleteUser'])->name('admin.delete.user');
    Route::delete('admin/withdrawal', [AdminController::class, 'deleteWithdrawal'])->name('admin.delete.withdrawal');
    Route::post('admin/balance', [AdminController::class, 'editBalance'])->name('admin.edit.balance');
    Route::post('admin/revenue', [AdminController::class, 'editRevenue'])->name('user.edit.revenue');
    Route::post('admin/activate-user/{user}', [AdminController::class, 'activateUser'])->name('admin.activate.user');
    Route::get('/admin/{user}/user-details', [AdminController::class, 'userDetails'])->name('admin.user.details');
    Route::get('/admin/{user}/transfer/{transaction-id}', [AdminController::class, 'transferDetails'])->name('admin.transfer.details');
    Route::post('admin/{user}/limit', [AdminController::class, 'limitAccount'])->name('admin.account.limit');
    Route::post('admin/{user}/plan/edit', [AdminController::class, 'editPlan'])->name('admin.edit.plan');
    Route::delete('admin/{user}/plan/delete', [AdminController::class, 'deletePlan'])->name('admin.delete.plan');
    Route::post('admin/{user}/approve-transfer', [AdminController::class, 'approveTransfer'])->name('admin.approve.transfer');
    Route::post('admin/{user}/set-commision', [AdminController::class, 'setWithdrawalCommission'])->name('admin.set.commission');
    Route::post('admin/{user}/set-transfer-rule', [AdminController::class, 'setWithdrawalCommission'])->name('admin.set.transfer-rule');
    Route::post('admin/set_wallet', [AdminController::class, 'setWallet'])->name('admin.wallet');

// User Routes
    //Main Page Routes
    Route::get('/dashboard', [HomeController::class, 'index'])->name('user.dashboard');
    Route::get('dashboard/profile', [HomeController::class, 'profile'])->name('user.profile');
    Route::post('dashboard/profile/{user}', [HomeController::class, 'updateProfile'])->name('user.profile.update');
    //API endpoint for Filepond
    Route::post('dashboard/profile/{user}/avatar', [HomeController::class, 'uploadAvatar'])->name('user.profile.avatar');
    //Regular file storage endpoint
    Route::post('avatar/{user}/store', [HomeController::class, 'storeAvatar'])->name('user.avatar.store');
    Route::get('dashboard/deposit-history', [HomeController::class, 'showHistoryPage'])->name('user.deposit.history');
    Route::get('dashboard/earning-history', [HomeController::class, 'showEarningHistory'])->name('user.earnings.history');
    Route::get('dashboard/fund-account', [HomeController::class, 'showFundAccountPage'])->name('user.fund');
    Route::get('dashboard/purchase', [HomeController::class, 'showPurchasePlan'])->name('user.purchase');
    Route::post('dashboard/{user}/purchase', [HomeController::class, 'purchasePlan'])->name('user.purchase.pay');
    Route::get('dashboard/withdraw', [HomeController::class, 'showWithdrawalPage'])->name('user.withdrawal');
    Route::post('dashboard/{user}/withdraw', [HomeController::class, 'withdrawFund'])->name('user.withdrawal.request');
    Route::get('dashboard/invest', [HomeController::class, 'showInvestmentsPage'])->name('user.invest');
    Route::get('dashboard/wallets', [HomeController::class, 'showWalletPage'])->name('user.wallets');
    Route::post('dashboard/fund/submit', [HomeController::class, 'setShowInvoice'])->name('user.fund.store');
    Route::post('dashboard/{user}/profile/password-update', [HomeController::class, 'changePassword'])->name('user.password.update');

    //Referral link
    Route::get('/{referral_link}', function($referral_link){
        return redirect()->route('register')->withLink($referral_link);
    })->name('referral-link');

    Route::post('dashboard/wallet/{user}/bitcoin', [WalletController::class, 'bitcoinWallet'])->name('user.wallet.bitcoin');
    Route::post('dashboard/wallet/{user}/bitcoin-cash', [WalletController::class, 'bitcoinCashWallet'])->name('user.wallet.bitcoin-cash');
    Route::post('dashboard/wallet/{user}/litecoin', [WalletController::class, 'litecoinWallet'])->name('user.wallet.litecoin');
    Route::post('dashboard/wallet/{user}/ethereum', [WalletController::class, 'ethereumWallet'])->name('user.wallet.ethereum');
    Route::post('dashboard/wallet/{user}/stellar', [WalletController::class, 'stellarWallet'])->name('user.wallet.stellar');
    Route::post('dashboard/wallet/{user}/dash', [WalletController::class, 'dashWallet'])->name('user.wallet.dash');
