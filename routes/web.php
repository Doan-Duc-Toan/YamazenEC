<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('dashboard');
});

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'login'])->name('login.login');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
Route::post('/register',[LoginController::class, 'register'])->name('register');
Route::get('/forgot_password',[LoginController::class, 'forgot'])->name('forgot_password');
Route::post('/reset',[LoginController::class,'reset'])->name('reset');
Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
