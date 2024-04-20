<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;


class ProdutoController extends Controller
{
    public function pagProduto()
    {
        return view('produtos'/*nome da view */)->with('produto'/*nome da variavel */ , produto::all());
    }
    
}
