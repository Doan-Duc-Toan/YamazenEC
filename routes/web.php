<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard')->middleware('auth');;
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'login'])->name('login.login');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
Route::post('/register',[LoginController::class, 'register'])->name('register');
