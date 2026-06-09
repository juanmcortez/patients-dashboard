<?php

use App\Http\Controllers\Common\DashboardController;
use App\Http\Controllers\Common\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/', DashboardController::class)->name('dashboard');

    // Profile
    Route::get('/profile', ProfileController::class)->name('profile');
});
