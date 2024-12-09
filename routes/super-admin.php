<?php

use App\Http\Controllers\Dashboard\SuperAdminDashboardController;

Route::middleware(['auth', 'role:Super Admin'])->group(function () {
    Route::get('/super-admin/dashboard', [SuperAdminDashboardController::class, 'index'])->name('super-admin.dashboard');
    Route::get('/super-admin/tournaments', [SuperAdminDashboardController::class, 'tournaments'])->name('super-admin.tournaments');
    Route::post('/super-admin/create-owner', [SuperAdminDashboardController::class, 'createOwner'])->name('super-admin.owner.create');
    Route::post('/super-admin/create-tournament', [SuperAdminDashboardController::class, 'createTournament'])->name('super-admin.tournament.create');
});
