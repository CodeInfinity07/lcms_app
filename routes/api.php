<?php

use App\Http\Controllers\DataController;

Route::get('/api/owners', [DataController::class, 'owners'])->name('data.owners');
Route::get('/api/admins', [DataController::class, 'admins'])->name('data.admins');
Route::get('/api/tournaments', [DataController::class, 'tournaments'])->name('data.tournaments');
Route::get('/api/allUsers', [DataController::class, 'all_users'])->name('data.all_users');
Route::get('/api/superAdmins', [DataController::class, 'superAdmins'])->name('data.superAdmins');
Route::delete('/api/owners/{id}', [DataController::class, 'deleteUser'])->middleware('auth:sanctum');
Route::delete('/api/admins/{id}', [DataController::class, 'deleteAdmin'])->middleware('auth:sanctum');
Route::delete('/api/allUsers/{id}', [DataController::class, 'delete'])->middleware('auth:sanctum');
Route::delete('/api/superAdmins/{id}', [DataController::class, 'deletesuperAdmins'])->middleware('auth:sanctum');

