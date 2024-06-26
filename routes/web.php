<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isCustomer;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::resource('reservation', ReservationController::class)->middleware('auth');

// CUSTOMER
Route::prefix('customer')->middleware(['auth', isCustomer::class])->group(function () {
    Route::get('/', function () {
        return view('customer.index');
    });
    Route::resource('reviews', ReviewController::class);
});

// ADMIN
Route::prefix('admin')->middleware(['auth', isAdmin::class])->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('/services', ServiceController::class);
    Route::resource('/branches', BranchController::class);
});

// AUTH
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'doLogin'])->name('doLogin');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'doRegister'])->name('doRegister');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
