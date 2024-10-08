<?php

use App\Http\Controllers\user\BuyPlansController;
use App\Http\Controllers\user\DepositController;
use App\Http\Controllers\user\UserDashboard;
use App\Http\Controllers\user\UserWithdrawController;
use Illuminate\Support\Facades\Route;


Route::name('User.')->prefix('User')->middleware('auth', 'user')->group(function () {
    Route::get('/Dashboard', [UserDashboard::class, 'index'])->name('Dashboard');
    Route::get('/Refer/Member', [UserDashboard::class, 'refer'])->name('Refer.New.User');
    Route::get('/My/Team', [UserDashboard::class, 'team'])->name('My.Team');
    Route::get('/Change/Password', [UserDashboard::class, 'changePassword'])->name('Change.Password');
    Route::post('/Update/Password/{id}', [UserDashboard::class, 'updatePassword'])->name('Update.Password');
    // deposit
    Route::get('/Deposit', [DepositController::class, 'deposit'])->name('Deposit');
    Route::get('/Deposit/Report', [DepositController::class, 'depositReport'])->name('Deposit.Report');
    Route::post('/Deposit/Request', [DepositController::class, 'request'])->name('Deposit.Request');
    // Withdraw
    Route::get('Withdraw/Page', [UserWithdrawController::class, 'withdrawIndex'])->name('Apply.Withdraw');
    Route::post('Store/Withdraw/Request', [UserWithdrawController::class, 'storeWithdraw'])->name('Store.Withdraw');
    // plans
    Route::get('Plans', [BuyPlansController::class, 'plans'])->name('Plans');
    Route::get('Purchased/Plans', [BuyPlansController::class, 'purchasedPlan'])->name('Purchased.Plans');
    Route::post('Buy/Plan', [BuyPlansController::class, 'buyPlan'])->name('Buy.Plan');
    // bouns
    Route::get('/All/Rewards', [UserDashboard::class, 'rewards'])->name('All.Rewards');
});
