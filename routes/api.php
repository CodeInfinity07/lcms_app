<?php

use App\Http\Controllers\DataController;

Route::get('/api/owners', [DataController::class, 'owners'])->name('data.owners');
Route::get('/api/admins', [DataController::class, 'admins'])->name('data.admins');
Route::get('/api/tournaments', [DataController::class, 'tournaments'])->name('data.tournaments');
Route::delete('/api/owners/{id}', [DataController::class, 'deleteUser'])->middleware('auth:sanctum');
Route::delete('/api/admins/{id}', [DataController::class, 'deleteAdmin'])->middleware('auth:sanctum');

