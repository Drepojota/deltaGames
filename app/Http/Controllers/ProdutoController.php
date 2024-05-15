<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produto;




class ProdutoController extends Controller
{
    public function home()
    {
        $produtos = produto::all();
        return view('home', compact('produtos'));
    }

    public function dev()
    {
        return view('dev')->with('\dev' , produto::all());
    }

    public function cart()
    {
        return view('cart')->with('\cart' , produto::all());
    }

    public function allProducts()
    {
        $produtos = produto::all();
        return view('allProducts')->with('\Jogos' , produto::all());
    }

    public function login()
    {
        return view('login')->with('\login' , produto::all());
    }

    public function ApresProduto()
    {
        return view('ApresProduto')->with('\pagProduto' , Produto::all());
    }
    
}
