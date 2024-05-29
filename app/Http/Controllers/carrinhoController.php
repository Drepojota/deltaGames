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
        $user = Auth::User();
        $carrinho = Carrinho::where('USUARIO_ID', $user->USUARIO_ID)->where('ITEM_QTD','>','0')->get();

        return view('Produtos.cart', compact('carrinho'));
    }

    public function addToCart(Request $request, $produto_id)
{
    // Verifique se o usuário está autenticado
    if (Auth::check()) {
        $user = Auth::User();
        // Verifique se o produto já está no carrinho do usuário
        $carrinho_item = Carrinho::where('USUARIO_ID', $user->USUARIO_ID)
                                  ->where('PRODUTO_ID', $produto_id)
                                  ->first();
        if ($carrinho_item) {
            // Se o produto já estiver no carrinho, aumente a quantidade em 1
            $carrinho_item->ITEM_QTD += 1;
            $carrinho_item->save();
        } else {
            // Se o produto não estiver no carrinho, crie um novo item no carrinho
            $carrinho_item = new Carrinho();
            $carrinho_item->USUARIO_ID = $user->USUARIO_ID;
            $carrinho_item->PRODUTO_ID = $produto_id;
            $carrinho_item->ITEM_QTD = 1;
            $carrinho_item->save();
        }
        // Redirecione de volta para a página de produtos ou para o carrinho
        return redirect()->route('cart'); // ou para outra página
    } else {
        // Se o usuário não estiver autenticado, redirecione para a página de login
        return redirect()->route('login')->with('error', 'Você precisa fazer login para adicionar produtos ao carrinho.');
    }
}
}
