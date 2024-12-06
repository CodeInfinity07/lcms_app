<?php

use App\Http\Controllers\Dashboard\OwnerDashboardController;

Route::middleware(['auth', 'role:Owner'])->group(function () {
    Route::get('/owner/dashboard', [OwnerDashboardController::class, 'index'])->name('owner.dashboard');
    Route::get('/owner/management', [OwnerDashboardController::class, 'management'])->name('owner.management');
    Route::get('/owner/tournaments', [OwnerDashboardController::class, 'tournaments'])->name('owner.tournaments');
    Route::get('/owner/matches', [OwnerDashboardController::class, 'matches'])->name('owner.matches');

});
