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
        return view('Produtos.search', ['produtos' => $produtos, 'query' => $query]);
    }
}
