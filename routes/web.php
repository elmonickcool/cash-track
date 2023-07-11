<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthenticationController::class)->group(function(){
    Route::get('/register','register')->name('register');
    Route::post('/store','store')->name('store');
    Route::get('/login','login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authentication');
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::post('/logout','logout')->name('logout');
});

Route::get('/income/create', [IncomeController::class, 'create'])->name('income.create');
Route::post('/income', [IncomeController::class, 'store'])->name('income.store');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');