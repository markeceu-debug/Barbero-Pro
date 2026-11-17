<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\BarberLoginController;
use App\Http\Controllers\Auth\CustomerLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('customer.login'));

// --- Admin ---
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [AdminLoginController::class, 'login'])
            ->middleware('throttle:6,1')
            ->name('login.attempt');
    });

    Route::post('logout', [AdminLoginController::class, 'logout'])
        ->middleware('admin')
        ->name('logout');

    Route::get('dashboard', fn () => view('dashboard.admin'))
        ->middleware('admin')
        ->name('dashboard');
});

// --- Barbeiro ---
Route::prefix('barbeiro')->name('barber.')->group(function () {
    Route::middleware('guest:barber')->group(function () {
        Route::get('login', [BarberLoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [BarberLoginController::class, 'login'])
            ->middleware('throttle:6,1')
            ->name('login.attempt');
    });

    Route::post('logout', [BarberLoginController::class, 'logout'])
        ->middleware('barber')
        ->name('logout');

    Route::get('dashboard', fn () => view('dashboard.barber'))
        ->middleware('barber')
        ->name('dashboard');
});

// --- Cliente ---
Route::prefix('cliente')->name('customer.')->group(function () {
    Route::middleware('guest:customer')->group(function () {
        Route::get('login', [CustomerLoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [CustomerLoginController::class, 'login'])
            ->middleware('throttle:6,1')
            ->name('login.attempt');
    });

    Route::post('logout', [CustomerLoginController::class, 'logout'])
        ->middleware('customer')
        ->name('logout');

    Route::get('dashboard', fn () => view('dashboard.customer'))
        ->middleware('customer')
        ->name('dashboard');
});