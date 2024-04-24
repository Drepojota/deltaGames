<?php

namespace App\Http\Controllers;
use App\Models\Produto;

class ClientController extends Controller
{
    public function login()
    {
        return view('login')->with('\login' , produto::all());
    }

    public function cadastro()
    {
        return view('cadastro')->with('\cadastro' , produto::all());
    }
}
