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
    
        $credentials = $request->only('USUARIO_EMAIL', 'USUARIO_SENHA');
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
