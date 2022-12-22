<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TransactionController;

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

Route::resource('apps', AppController::class);
Route::get('/', [AppController::class,'index'])->name('apps.index');

Route::resource('accounts', AccountController::class);
Route::get('/accounts', [AccountController::class,'index'])->name('accounts.index');
Route::get('/accounts/create', [AccountController::class,'create'])->name('accounts.create');
Route::post('/accounts', [AccountController::class,'store'])->name('accounts.store');
Route::get('/accounts/{book}', [AccountController::class,'show'])->name('accounts.show');
Route::get('/accounts/{book}/edit', [AccountController::class,'edit'])->name('accounts.edit');
Route::patch('/accounts/{book}', [AccountController::class,'update'])->name('accounts.update');
Route::delete('/accounts/{book}', [AccountController::class,'destroy'])->name('accounts.destroy');

Route::resource('transactions', TransactionController::class);
Route::get('/transactions', [TransactionController::class,'index'])->name('transactions.index');
Route::get('/transactions/create', [TransactionController::class,'create'])->name('transactions.create');
Route::post('/transactions', [TransactionController::class,'store'])->name('transactions.store');
Route::get('/transactions/{book}', [TransactionController::class,'show'])->name('transactions.show');
Route::get('/transactions/{book}/edit', [TransactionController::class,'edit'])->name('transactions.edit');
Route::patch('/transactions/{book}', [TransactionController::class,'update'])->name('transactions.update');
Route::delete('/transactions/{book}', [TransactionController::class,'destroy'])->name('transactions.destroy');
