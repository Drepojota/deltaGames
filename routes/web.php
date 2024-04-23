<?php

use App\Http\Controllers\clientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/home', [ProdutoController::class, 'home']);
Route::get('/cart', [ProdutoController::class, 'cart']);
Route::get('/dev', [ProdutoController::class, 'dev']);
Route::get('/ApresProduto', [ProdutoController::class, 'pagProduto']);
Route::get('/Jogos', [ProdutoController::class, 'allProducts']);
Route::get('/login', [ clientController::class, 'login']); 
Route::get('/cadastro', [ clientController::class, 'cadastro']); 


