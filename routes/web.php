<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetController;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/registrate', [RegisterController::class, 'registrate'])->name('registrate');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [ResetController::class, 'reset'])->name('password.request');

Route::middleware(['auth'])->group(function (){
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
