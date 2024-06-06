<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\carrinhoController;
use App\Http\Controllers\searchController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';
Route::get('/home', [ProdutoController::class, 'home'])->name('home');

//O group é usado para garantir que apenas usuários autenticados possam acessar as rotas dentro do Carrinho
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CarrinhoController::class, 'carrinho'])->name('cart');
    Route::post('/cart/add/{produto_id}', [CarrinhoController::class, 'addToCart'])->name('cart.add');
    Route::delete('/cart/remove/{produto_id}', [CarrinhoController::class, 'removeFromCart'])->name('cart.remove');
    Route::delete('/cart/clear', [CarrinhoController::class, 'clearCart'])->name('cart.clear');
});

Route::get('/dev', [ProdutoController::class, 'dev']);
Route::get('/jogo/{produto}', [ProdutoController::class, 'indexProduto']);
Route::get('/jogos', [ProdutoController::class, 'allProducts']);
Route::get('/jogos/{categoria}', [CategoriaController::class, 'indexCat']);
Route::get('/search', [searchController::class, 'search'])->name('search');
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy')->name('logout');
});
Route::get('/cadastro', [RegisterController::class, 'showRegistrationForm'])->name('register.show');
Route::post('/cadastro', [RegisterController::class, 'register'])->name('register.store');