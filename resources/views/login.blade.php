@extends('layouts.main')
    @section('title', 'Login')
    
    
    @section('content')

    <a href="{{ route('homee') }}">Home</a>
    <h2>Login</h2>

    @if(session()->has('success'))
    {{ session()->get('sucess') }}
    @endif


    @if (auth()->check())
    Already logged in
        
    @else


    @error('error')
        <span>{{ $message }}</span>
    @enderror
    
    <section class="area-login">
        <div class="login">
            <div>
                <img src="{{ asset('image/nav/logo.png') }}" alt="Logo">
            </div>
    
            <form action="{{ route('entrar.store') }}" method="POST">
                @csrf
                <input type="email" name="USUARIO_EMAIL" value="teste_1@gmail.com" placeholder="Email de usuário:" required autofocus> 
                @error('USUARIO_EMAIL')
                <span>{{ $message }}</span>
                @enderror

                <input type="password" name="USUARIO_SENHA" value="Testando" placeholder="Sua senha:" required>
                @error('USUARIO_SENHA')
                <span>{{ $message }}</span>
                @enderror
                <input type="submit" value="Entrar">
            </form>
    
    
            <p>Ainda não tem uma conta? <a href="#">Criar Conta</a></p>
        </div>
    </section>
    @endsection
    @endif
