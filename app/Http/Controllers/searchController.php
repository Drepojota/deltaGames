<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('search');
        $produtos = Produto::where('PRODUTO_NOME', 'LIKE', "%{$query}%")->get();
        if ($query) {
            $pesquisas = Produto::where('PRODUTO_NOME', 'like', "%{$query}%")
                ->orWhere('PRODUTO_DESC', 'like', "%{$query}%")
                ->orWhereHas('categoria', function ($queryCategoria) use ($query) {
                    $queryCategoria->where('CATEGORIA_NOME', 'like', "%{$query}%");
                })
                ->get();
        } else {
            $pesquisas = Produto::all();
        }
        
        return view('Produtos.search', ['produtos' => $produtos, 'query' => $query]);
    }
}
