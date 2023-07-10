<?php

use Illuminate\Support\Facades\Route;
use App\Http\Contrrollers\Auth\AuthenticationController;

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
    Route::get('/store','store')->name('store');
    Route::get('/login','login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authentication');
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::post('/logout','logout')->name('logout');
});