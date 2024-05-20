<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        return view('logar'); // Certifique-se de que o arquivo de visão é 'logar.blade.php'
    }

    public function login(Request $request)
    {
        $request->validate([
            'USUARIO_EMAIL' => 'required|email',
            'USUARIO_SENHA' => 'required|string|min:6',
        ]);

        $credentials = [
            'USUARIO_EMAIL' => $request->USUARIO_EMAIL,
            'password' => $request->USUARIO_SENHA,
        ];

        dd($credentials); // Verifique as credenciais aqui

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        } else {
            return back()->withErrors([
                'loginError' => 'As credenciais não correspondem aos nossos registros.',
            ]);
        }
    }


    public function cadastro()
    {
        return view('cadastro');
    }


}
