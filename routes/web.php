<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projetoDeltagames;

Route::get('/home', [projetoDeltagames::class, 'home']);
Route::get('/cart', [projetoDeltagames::class, 'cart']);
Route::get('/riot', [projetoDeltagames::class, 'riot']);
Route::get('/valorant', [projetoDeltagames::class, 'valorant']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
