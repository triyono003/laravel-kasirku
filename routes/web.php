<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterationController;
use App\Http\Controllers\AddDataController;
use App\Http\Controllers\UserBuyController;
use App\Http\Controllers\DataTransactionController;
use App\Http\Middleware\IsAdmin;

Route::middleware('auth')->group(function() {
  Route::get('/', [HomeController::class, 'home']);
  Route::get('/', [HomeController::class, 'show']);
  Route::post('/logout', LogoutController::class)->name('logout');
  Route::get('buy/{id}/confirmation', [UserBuyController::class, 'create']);
  Route::post('/buy/{id}/confirmation', [UserBuyController::class, 'store']);
});

Route::middleware('admin')->group(function() {
  Route::get('/add', [AddDataController::class, 'create'])->middleware('admin');
  Route::post('/add', [AddDataController::class, 'store'])->middleware('admin');
  Route::get('/dashboard', [HomeController::class, 'dashboard']);
  Route::get('/buy/history', [DataTransactionController::class, 'history']);
});

Route::middleware('guest')->group(function() {
  Route::get('/register', [RegisterationController::class, 'create']);
  Route::get('/login', [LoginController::class, 'login'])->name('login');
  Route::post('/register', [RegisterationController::class, 'store']);
  Route::post('/login', [LoginController::class, 'store']);
});