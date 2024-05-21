@extends('layouts.main')
    @section('title', 'Login')
    
    
    @section('content')

    <a href="{{ route('homee') }}">Home</a>
    <h2>Login</h2>

    @if(session()->has('success'))
    {{ session()->get('sucess') }}
    @endif

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
                <input type="password" name="USUARIO_SENHA" value="Testando" placeholder="Sua senha:" required>
                <input type="submit" value="Entrar">
            </form>
    
    
            <p>Ainda não tem uma conta? <a href="#">Criar Conta</a></p>
        </div>
    </section>
