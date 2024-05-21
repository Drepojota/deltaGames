@extends('layouts.main')
@section('title', 'Login')

@section('content')
    <a href="{{ route('homee') }}">Home</a>
    <h2>Login</h2>

    @if(session()->has('success'))
        {{ session()->get('success') }}
    @endif

    @if (auth()->check())
        <p>Already logged in as {{ auth()->USUARIO()->USUARIO_NOME }} | <a href="{{ route('login.destroy') }}">Logout</a></p>
    @else
        @error('error')
            <span>{{ $message }}</span>
        @enderror

        <section class="area-login">
            <div class="login">
                <div>
                    <img src="{{ asset('image/nav/logo.png') }}" alt="Logo">
                </div>

                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <input type="email" name="USUARIO_EMAIL" placeholder="Email de usuário:" required autofocus>
                    @error('USUARIO_EMAIL')
                        <span>{{ $message }}</span>
                    @enderror

                    <input type="password" name="USUARIO_SENHA" placeholder="Sua senha:" required>
                    @error('USUARIO_SENHA')
                        <span>{{ $message }}</span>
                    @enderror
                    <input type="submit" value="Entrar">
                </form>

                <p>Ainda não tem uma conta? <a href="#">Criar Conta</a></p>
            </div>
        </section>
    @endif
@endsection