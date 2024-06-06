<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Imagem;
use App\Models\Categoria;




class ProdutoController extends Controller
{
    public function home()
    {
        $produtos = Produto::with('imagem')->get(); // Carregar o relacionamento 'imagem'
        $categorias = Categoria::all();
        $filtroCategorias = $categorias->random(12);
        $cat1Produtos = Categoria::where('CATEGORIA_ID', '1')->first()->produtos->take(10);
        $cat2Produtos = Categoria::where('CATEGORIA_ID', '85')->first()->produtos->take(10);
        $cat3Produtos = Categoria::where('CATEGORIA_ID', '89')->first()->produtos->take(10);
        return view('home', compact('produtos', 'filtroCategorias', 'cat1Produtos', 'cat2Produtos', 'cat3Produtos'));

    }
    
    public function cart(Produto $produto)
    {
        $produto->load('categoria', 'Imagem');
        return view('Produtos.cart')->with('produto', $produto);
    }

    public function allProducts()
    {
        $imagens = imagem::all();
        $produtos = produto::all();
        return view('Produtos.allProducts', compact('produtos'));
    }
    public function indexProduto(Produto $produto)
    {
        $produto->load('categoria', 'Imagem');
        $produtosSemelhantes = Produto::where('CATEGORIA_ID', $produto->CATEGORIA_ID)
                                      ->where('PRODUTO_ID', '!=', $produto->PRODUTO_ID)
                                      ->take(6)
                                      ->get();
        return view('Produtos.ApresProduto')->with([
            'produto' => $produto,
            'produtosSemelhantes' => $produtosSemelhantes
        ]);
    }
    
    
    public function login()
    {
        return view('login.login')->with('\login' , produto::all());
    }
}



