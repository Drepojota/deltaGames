<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;        

class projetoDeltagames extends Controller
{
    public function home(){
        return view('home');
    }

    public function cart(){
        return view('cart');
    }

    public function riot(){
        return view('riot');
    }

    public function valorant(){
        return view('valorant');
    }
}