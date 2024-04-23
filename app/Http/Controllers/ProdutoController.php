<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;


class ProdutoController extends Controller
{
    public function pagProduto()
    {
        return view('produtos')->with('\produtos' , produto::all());
    }
    public function dev()
    {
        return view('dev')->with('\dev' , produto::all());
    }
    public function cart()
    {
        return view('cart')->with('\cart' , produto::all());
    }
    public function home()
    {
        return view('home')->with('\home' , produto::all());
    }

}
