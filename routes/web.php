<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projetoDeltagames;

Route::get('/layoutsBlade/home', [projetoDeltagames::class, 'home']);
Route::get('/layoutsBlade/cart', [projetoDeltagames::class, 'cart']);
Route::get('/layoutsBlade/dev', [projetoDeltagames::class, 'dev']);
Route::get('/layoutsBlade/produtos', [projetoDeltagames::class, 'produtos']);



