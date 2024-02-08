<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;


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

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


Route::post('/logout', [LogoutController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/about', function () {
    return view('about');
});

//Route::post('/forgot-password', [loginController::class, 'storeforgot']);
//Route::post('/forgot-password/{token}', [loginController::class, 'reset']);

Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'create'])->name('resetpassword');
Route::post('/forgot-password', [ForgotPasswordLinkController::class, 'store'])->name('password.reset');


Route::get('/test',function (){
    return view('password.email');
});
//
//Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'create'])->name('password.email');
//Route::post('/reset-password/{token}', [ForgotPasswordController::class, 'reset'])->name('password.update');

// Password Reset Routes
//Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', [ForgotPasswordController::class, 'create'])->name('password.reset');
Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');

//Route::get('/dashboard', function () {
//    return redirect('/home/dashboard');
//});
