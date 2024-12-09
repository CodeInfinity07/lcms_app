<?php

use App\Http\Controllers\Dashboard\SuperOwnerDashboardController;

Route::middleware(['auth', 'role:Super Owner'])->group(
    function () {
        Route::get('/super-owner/tournaments', [SuperOwnerDashboardController::class, 'tournaments'])->name('super-owner.tournaments');
        Route::get('/super-owner/owners', [SuperOwnerDashboardController::class, 'owners'])->name('super-owner.owners');
        Route::get('/super-owner/dashboard', [SuperOwnerDashboardController::class, 'index'])->name('super-owner.dashboard');
        Route::get('/super-owner/super-admins', [SuperOwnerDashboardController::class, 'superAdmins'])->name('super-owner.superAdmins');
        Route::post('/super-owner/create-owner', [SuperOwnerDashboardController::class, 'createOwner'])->name('super-owner.owner.create');
        Route::post('/super-owner/create-tournament', [SuperOwnerDashboardController::class, 'createTournament'])->name('super-owner.tournament.create');
        Route::post('/super-owner/create-super-admin', [SuperOwnerDashboardController::class, 'createSuperAdmin'])->name('super-owner.create.super-admin');

    }
);