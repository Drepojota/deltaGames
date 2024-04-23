<?php

namespace App\Http\Controllers;
use App\Models\Produto;

use Illuminate\Http\Request;

class clientController extends Controller
{
    public function login()
    {
        return view('login')->with('\login' , produto::all());
    }
}
