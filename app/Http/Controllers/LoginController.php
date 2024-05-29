<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index($USUARIO, $USUARIO_EMAIL = "", $USUARIO_SENHA=""){
        return view('login');
    }

    public function store(Request $request){
        $request->validate([
            '$USUARIO_EMAIL' =>'required|email',
            '$USUARIO_SENHA' =>'required|password'
        ],[
            'USUARIO_EMAIL.required' => 'O campo email é obrigatório',
            "USUARIO_EMAIL.email" =>"Esse campo tem que ter um email valido",
            'USUARIO_SENHA.required' => 'O campo senha é obrigatório'
        ]);

        $credentials = $request->only('USUARIO_EMAIL', 'USUARIO_SENHA');
       $authenticated = Auth::attempt($credentials);

       if(!$authenticated){
        return redirect()->route('entrar.index')->withErrors(['error' => 'email ou senha inválidos']);
       }
       return redirect()->route('entrar.index')->with('success', 'logget in');
    }
    protected function customAttempt($credentials)
    {
        $USUARIO = User::where('USUARIO_EMAIL', $credentials['USUARIO_EMAIL'])->first();

        if (!$USUARIO) {
            return false;
        }

        return Hash::check($credentials['USUARIO_SENHA'], $USUARIO->USUARIO_SENHA);
    }


    public function destroy(){
        var_dump('logout');
    }
}
