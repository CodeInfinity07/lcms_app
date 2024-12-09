<?php

require __DIR__ . '/admin.php';
require __DIR__ . '/member.php';
require __DIR__ . '/owner.php';
require __DIR__ . '/super-admin.php';
require __DIR__ . '/super-owner.php';
require __DIR__ . '/api.php';

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'home'])->name('root');


Route::get('/login', function () {
    return view('login');
});

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/tournaments', function () {
    return view('tournaments');
});

Route::get('/communities', function () {
    return view('communities');
});

Route::get('/community', function () {
    return view('community');
});

Route::get('/tournaments-single', function () {
    return view('tournaments-single');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about-us', function () {
    return view(view: 'about-us');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');