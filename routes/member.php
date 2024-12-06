<?php

use App\Http\Controllers\Dashboard\MemberDashboardController;

Route::middleware(['auth', 'role:Member'])->group(function () {
    Route::get('/member/dashboard', [MemberDashboardController::class, 'index'])->name('member.dashboard');
});
