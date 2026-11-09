<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Home buat login
Route::get('/', fn() => redirect()->route('login'));

Route::get('/login', [PageController::class, 'showLogin'])->name('login');
Route::post('/login', [PageController::class, 'processLogin'])->name('login.process');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile',   [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');