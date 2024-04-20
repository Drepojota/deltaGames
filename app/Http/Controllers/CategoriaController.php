<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function indexCat()
    {
        return view('categoria.indexCat')->with('categorias', Categoria::all());
    }

    public function editCat(Categoria $categoria)
    {
        return view('categoria.editCat')->with('categoria', $categoria);
    }

    public function updateCat(Request $request, Categoria $categoria)
    {
        $categoria->CATEGORIA_NOME = $request->CATEGORIA_NOME;
        $categoria->CATEGORIA_DESC = $request->CATEGORIA_DESC;
        $categoria->save;

        return redirect(route('categoria.index'));
    }

    public function createCat()
    {
        return view('categoria.createCat');
    }

    public function insertCat(Request $request)
    {
        Categoria::create([
            'CATEGORIA_NOME' => $request->CATEGORIA_NOME,
            'CATEGORIA_DESC' => $request->CATEGORIA_DESC,
            'CATEGORIA_ATIVO' => 1
        ]);
        return redirect(route('categoria.index'));
    }
}
