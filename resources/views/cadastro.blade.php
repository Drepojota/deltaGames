@extends('layouts.main')
@section('title', 'Cadastro')

<style>
    .error-message {
        color: red;
        font-size: 0.875em;
        margin-top: 5px;
        display: block;
    }
    .success-message {
        color: green;
        font-size: 0.875em;
        margin-top: 5px;
        display: block;
    }
</style>

@section('content')
    <section class="area-cadastro">
        <div class="login">
            @if(session()->has('success'))
                <div class="success-message">{{ session()->get('success') }}</div>
            @endif

            <div>
                <img src="{{ asset('image/nav/logo.png') }}" alt="Logo">
            </div>

            <form method="POST" action="{{ route('register.store') }}">
                @csrf

                    <input type="text" name="USUARIO_NOME" placeholder="Nome de usuário:" required autofocus value="{{ old('USUARIO_NOME') }}">
                    @error('USUARIO_NOME')
                        <span class="error-message">{{ $message }}</span>
                    @enderror

                    <input type="email" name="USUARIO_EMAIL" placeholder="Email de usuário:" required value="{{ old('USUARIO_EMAIL') }}">
                    @error('USUARIO_EMAIL')
                        <span class="error-message">{{ $message }}</span>
                    @enderror

                    <input type="text" name="USUARIO_CPF" placeholder="CPF:" required value="{{ old('USUARIO_CPF') }}">
                    @error('USUARIO_CPF')
                        <span class="error-message">{{ $message }}</span>
                    @enderror

                    <input type="password" name="USUARIO_SENHA" placeholder="Sua senha:" required>
                    @error('USUARIO_SENHA')
                        <span class="error-message">{{ $message }}</span>
                    @enderror

                    <input type="password" name="USUARIO_SENHA_confirmation" placeholder="Confirme sua senha:" required>

                <input type="submit" value="Cadastrar">
            </form>

            <p>Já tem uma conta? <a href="{{ route('login.index') }}">Entrar</a></p>
        </div>
    </section>
@endsection