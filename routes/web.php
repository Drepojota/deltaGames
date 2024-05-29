<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/logar', function () {
    return view('logar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', [ProdutoController::class, 'home']);
Route::get('/cart/{produto}', [ProdutoController::class, 'cart']);
Route::get('/dev', [ProdutoController::class, 'dev']);
Route::get('/jogo/{produto}', [ProdutoController::class, 'indexProduto']);
Route::get('/jogos', [ProdutoController::class, 'allProducts']);
Route::get('/jogos/{categoria}', [CategoriaController::class, 'indexCat']);



Route::get('/login', [HomeController::class, 'index'])->name('homee');
Route::controller(LoginController::class)->group(function (){
    Route::get('/login','index')->name('login.index');
    Route::post('/login','store')->name('login.store');
    Route::get('/logout','destoy')->name('login.destroy');
});





