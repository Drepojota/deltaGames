<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'USUARIO_EMAIL' =>'required|email',
            'USUARIO_SENHA' =>'required'
        ],[
            'USUARIO_EMAIL.required' => 'O campo email é obrigatório',
            'USUARIO_EMAIL.email' => 'O campo email é obrigatório',
            'USUARIO_SENHA.required' => 'O campo password é obrigatório'
        ]);
    
        // Mapeie as chaves do array de credenciais para corresponder às expectativas do Laravel
        $credentials = [
            'USUARIO_EMAIL' => $request->input('USUARIO_EMAIL'),
            'USUARIO_SENHA' => $request->input('USUARIO_SENHA')
        ];
    
        $authenticated = Auth::attempt($credentials);
    
        if (!$authenticated) {
            return redirect()->route('entrar.index')->withErrors(['error' => 'Email ou senha inválidos']);
        }
    
        return redirect()->route('entrar.index')->with('success', 'Logado com sucesso');
    }

    public function destroy(){
        var_dump('logout');
    }
}
