<?php

namespace App\Http\Controllers;
use App\Models\Produto;

class clientController extends Controller
{
    public function login()
    {
        return view('login')->with('\login' , produto::all());
    }
}
