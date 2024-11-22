<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('bank', BankController::class);
Route::resource('account', AccountController::class);
Route::resource('type', TypeController::class);
Route::resource('category', CategoryController::class);
Route::resource('asset', AssetController::class);
Route::resource('budget', BudgetController::class);
Route::resource('user', UserController::class);
Route::resource('transaction', TransactionController::class);
