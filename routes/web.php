<?php

use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\Auth\LogoutController;
    use App\Http\Controllers\Auth\RegisterController;
    use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', fn() => 'dashboard :: ' . auth()->id())->name('dashboard');
    Route::get('/logout', LogoutController::class)->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});
