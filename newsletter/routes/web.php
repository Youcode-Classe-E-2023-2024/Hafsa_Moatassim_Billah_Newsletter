<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\MediaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'destroy'])->middleware('auth');

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'create'])->name('resetpassword');
Route::post('/forgot-password', [ForgotPasswordLinkController::class, 'store'])->name('password.reset');

Route::get('/test', function () {
    return view('password.email');
});

Route::get('password/reset/{token}', [ForgotPasswordController::class, 'create'])->name('password.reset');
Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/dashredacteur', function () {
        return view('dashredacteur');
    });

    Route::get('/upload', [MediaController::class, 'index'])->name('upload');
    Route::post('/upload', [MediaController::class, 'store'])->name('upload');
});

//Route::get('/users', function () {
//    return view('users');
//});

Route::get('/users', [UserController::class, 'show']);


Route::get('/subscribers', function () {
    return view('subscribers');
});

Route::get('/media', [MediaController::class, 'showCards'])->name('media');
Route::delete('/delete/{id}', [MediaController::class, 'destroy'])->name('delete.media');

Route::delete('/delete/{id}', [UserController::class, 'destroy']);

Route::get('/dashboard', [DashboardController::class, 'show']);
//Route::get('/users', [UserController::class, 'show']);



