<?php

use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\Auth\LogoutController;
    use App\Http\Controllers\Auth\RegisterController;
    use App\Http\Controllers\DashboardController;
    use App\Http\Controllers\LinkController;
    use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/logout', LogoutController::class)->name('logout');
    Route::get('/links', DashboardController::class)->name('dashboard');

    Route::get('/links/create', [LinkController::class, 'create'])->name('links.create');
    Route::post('/links/create', [LinkController::class, 'store']);
    Route::get('/links/edit/{link}', [LinkController::class, 'edit'])->name('links.edit');
    Route::put('/links/edit/{link}', [LinkController::class, 'update']);
    Route::delete('/links/delete/{link}', [LinkController::class, 'destroy'])->name('links.destroy');

    Route::patch('/links/up/{link}', [LinkController::class, 'up'])->name('links.up');
    Route::patch('/links/down/{link}', [LinkController::class, 'down'])->name('links.down');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});
