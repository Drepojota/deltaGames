<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Carrinho;

class CarrinhoController extends Controller
{
    public function carrinho()
    {
        $user = Auth::user();
        $carrinho = Carrinho::where('USUARIO_ID', $user->USUARIO_ID)->where('ITEM_QTD', '>', 0)->get();

        return view('Produtos.cart', compact('carrinho'));
    }

    public function addToCart(Request $request, $produto_id)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $carrinho_item = Carrinho::where('USUARIO_ID', $user->USUARIO_ID)
                                     ->where('PRODUTO_ID', $produto_id)
                                     ->first();

            if ($carrinho_item) {
                $carrinho_item->ITEM_QTD += 1;
                $carrinho_item->save();
            } else {
                $carrinho_item = new Carrinho();
                $carrinho_item->USUARIO_ID = $user->USUARIO_ID;
                $carrinho_item->PRODUTO_ID = $produto_id;
                $carrinho_item->ITEM_QTD = 1;
                $carrinho_item->save();
            }

            return redirect()->route('cart');
        } else {
            return redirect()->route('login')->with('error', 'Você precisa fazer login para adicionar produtos ao carrinho.');
        }
    }

    public function removeFromCart($produto_id)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $carrinho_item = Carrinho::where('USUARIO_ID', $user->USUARIO_ID)
                                     ->where('PRODUTO_ID', $produto_id)
                                     ->first();

            if ($carrinho_item) {
                Carrinho::where('USUARIO_ID', $user->USUARIO_ID)
                        ->where('PRODUTO_ID', $produto_id)
                        ->delete();
            }

            return redirect()->route('cart');
        } else {
            return redirect()->route('login')->with('error', 'Você precisa fazer login para remover produtos do carrinho.');
        }
    }
}
