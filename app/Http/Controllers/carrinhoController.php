<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Carrinho;
use App\Models\Produto;

class carrinhoController extends Controller
{
    public function carrinho()
    {
        $user = Auth::user();
        $carrinho = Carrinho::where('USUARIO_ID', $user->USUARIO_ID)->where('ITEM_QTD','>','0')->get();

        return view('Produtos.cart', compact('carrinho'));
    }
}
