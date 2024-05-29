<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('login.cadastro');
    }

    public function register(Request $request)
    {
        $request->validate([
            'USUARIO_NOME' => 'required|string|max:255',
            'USUARIO_EMAIL' => 'required|string|email|max:255|unique:USUARIO,USUARIO_EMAIL',
            'USUARIO_CPF' => 'required|string|max:11|unique:USUARIO,USUARIO_CPF',
            'USUARIO_SENHA' => 'required|string|confirmed',
        ]);

        $user = User::create([
            'USUARIO_NOME' => $request->USUARIO_NOME,
            'USUARIO_EMAIL' => $request->USUARIO_EMAIL,
            'USUARIO_CPF' => $request->USUARIO_CPF,
            'USUARIO_SENHA' => $request->USUARIO_SENHA,
        ]);

        Auth::login($user);

        return redirect()->route('home')->with('success', 'Cadastro realizado com sucesso!');
    }
}
