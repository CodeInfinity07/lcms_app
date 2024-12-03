<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

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