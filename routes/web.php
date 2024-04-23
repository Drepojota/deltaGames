<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/home', [ProdutoController::class, 'home']);
Route::get('/cart', [ProdutoController::class, 'cart']);
Route::get('/dev', [ProdutoController::class, 'dev']);
Route::get('/produtos', [ProdutoController::class, 'pagProduto']);



