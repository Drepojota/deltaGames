<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'USUARIO_EMAIL' => 'required|email',
            'USUARIO_SENHA' => 'required|string',
        ], [
            'USUARIO_EMAIL.required' => 'O campo email é obrigatório',
            'USUARIO_EMAIL.email' => 'Esse campo tem que ter um email válido',
            'USUARIO_SENHA.required' => 'O campo senha é obrigatório',
        ]);

        $credentials = $request->only('USUARIO_EMAIL', 'USUARIO_SENHA');

        $USUARIO = User::where('USUARIO_EMAIL', $credentials['USUARIO_EMAIL'])->first();

        if ($USUARIO && $USUARIO->USUARIO_SENHA === $credentials['USUARIO_SENHA']) {
            Auth::login($USUARIO);
            return redirect()->route('login.index')->with('success', 'Logado com sucesso');
        }

        return redirect()->route('login.index')->withErrors(['error' => 'Email ou senha inválidos']);
    }


    public function destroy(){
        Auth::logout();
        return redirect()->route('login.index')->with('success', 'Você foi desconectado');
    }

}

