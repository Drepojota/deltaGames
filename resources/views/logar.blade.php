@extends('layouts.main')
    @section('title', 'Login')
    
    
    @section('content')
    
    <section class="area-login">
        <div class="login">
            <div>
                <img src="{{ asset('image/nav/logo.png') }}" alt="Logo">
            </div>
    
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" name="USUARIO_EMAIL" placeholder="Email de usuário:" required autofocus>
                <input type="password" name="USUARIO_SENHA" placeholder="Sua senha:" required>
                <input type="submit" value="Entrar">
            </form>
    
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <p>Ainda não tem uma conta? <a href="{{ route('cadastro') }}">Criar Conta</a></p>
        </div>
    </section>
