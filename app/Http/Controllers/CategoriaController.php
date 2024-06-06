<?php

namespace App\Http\Controllers;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function indexCat(Categoria $categoria)
    {
        $contagemProdutos = $categoria->produtos()->count();
        return view('Produtos.productsCat', compact('categoria', 'contagemProdutos'));
    }

    public function filtroCat(Categoria $categoria)
    {
        return view('home')->with('categoria', $categoria);
    }
}
