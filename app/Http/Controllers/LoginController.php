<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $redirect = $request->input('redirect', 'home');
        return view('login.login', ['redirect' => $redirect]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'identifier' => 'required|string',
            'USUARIO_SENHA' => 'required|string',
        ], [
            'identifier.required' => 'O campo de email ou CPF é obrigatório',
            'USUARIO_SENHA.required' => 'O campo senha é obrigatório',
        ]);

        $identifier = $request->input('identifier');
        $password = $request->input('USUARIO_SENHA');
        $redirect = $request->input('redirect', 'home');

        // Verifica se é um email ou CPF
        if (filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
            $credentials = ['USUARIO_EMAIL' => $identifier, 'password' => $password];
        } else {
            $credentials = ['USUARIO_CPF' => $identifier, 'password' => $password];
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended($redirect)->with('success');
        }

        return back()->withErrors(['identifier' => 'Email/CPF ou senha inválidos']);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Você foi desconectado');
    }
}