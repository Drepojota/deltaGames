@extends('layouts.main')
@section('title', 'Cadastro')

@section('content')
    <section class="area-cadastro">
        <div class="login">
            <div>
                <img src="{{ asset('image/nav/logo.png') }}" alt="Logo">
            </div>

            <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <input type="text" name="USUARIO_NOME" placeholder="Nome de usuário:" required autofocus>
                @error('USUARIO_NOME')
                    <span>{{ $message }}</span>
                @enderror

                <div class="confirm-email">
                    <input type="email" name="USUARIO_EMAIL" placeholder="Email de usuário:" required>
                    @error('USUARIO_EMAIL')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <input type="text" name="USUARIO_CPF" placeholder="CPF:" required>
                @error('USUARIO_CPF')
                    <span>{{ $message }}</span>
                @enderror

                <input type="password" name="USUARIO_SENHA" placeholder="Sua senha:" required>
                @error('USUARIO_SENHA')
                    <span>{{ $message }}</span>
                @enderror

                <input type="password" name="USUARIO_SENHA_confirmation" placeholder="Confirme sua senha:" required>

                <input type="submit" value="Cadastrar">
            </form>

            <p>Já tem uma conta? <a href="{{ route('login.index') }}">Entrar</a></p>
        </div>
    </section>
@endsection