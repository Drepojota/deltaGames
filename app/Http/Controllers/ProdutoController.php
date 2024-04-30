<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produto;




class ProdutoController extends Controller
{
    public function home()
    {
        $produtos = Produto::all();
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
        return view('allProducts')->with('\Jogos' , Produto::all());
    }

    public function login()
    {
        return view('login')->with('\login' , Produto::all());
    }
    
}
