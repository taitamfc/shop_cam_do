<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceivableDebtController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    Route::post('logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::resource('customers', \App\Http\Controllers\CustomerController::class);
    Route::get('contracts/overdue', [\App\Http\Controllers\ContractController::class, 'overdue'])->name('contracts.overdue');
    Route::resource('contracts', \App\Http\Controllers\ContractController::class);
    Route::resource('pawns', \App\Http\Controllers\PawnController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class);

    Route::get('logs', [\App\Http\Controllers\LogController::class, 'index'])->name('logs.index');;
    Route::get('expenses', [\App\Http\Controllers\ExpenseController::class, 'index'])->name('expenses.index');
    // asset
    Route::get('asset', [\App\Http\Controllers\AssetController::class, 'index'])->name('asset.index');
    Route::get('asset/show/{id}', [\App\Http\Controllers\AssetController::class, 'show'])->name('asset.show');
    Route::get('asset/edit/{id}', [\App\Http\Controllers\AssetController::class, 'edit'])->name('asset.edit');
    Route::put('asset/update/{id}', [\App\Http\Controllers\AssetController::class, 'update'])->name('asset.update');
    Route::delete('asset/destroy/{id}', [\App\Http\Controllers\AssetController::class, 'destroy'])->name('asset.destroy');

    // funds
    Route::get('funds', [\App\Http\Controllers\FundController::class, 'index'])->name('funds.index');

    //no phai thu
    Route::controller(ReceivableDebtController::class)->group(function () {
        Route::get('receivable-debt/index', 'index')->name('receivable-debt.index');

    });

    // Thống kê: thu
    Route::get('statistical/collect', [\App\Http\Controllers\StatisticalController::class, 'collect'])->name('statistical.collect');
    Route::get('statistical/spend', [\App\Http\Controllers\StatisticalController::class, 'spend'])->name('statistical.spend');
});
