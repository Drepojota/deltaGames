@extends('layouts.main')
@section('title', 'Cadastro')


@section('content')
    <section class="container-register">
        <div class="login">
            @if(session()->has('success'))
                <div class="success-message">{{ session()->get('success') }}</div>
            @endif

            <div>
                <img src="{{ asset('image/nav/logo.png') }}" alt="Logo">
            </div>

            <form method="POST" action="{{ route('register.store') }}">
                @csrf

                    <div class="group">
                     <label for="password">Digite seu Nome:</label>
                    <input type="text" name="USUARIO_NOME" placeholder="Nome de usuário:" required autofocus value="{{ old('USUARIO_NOME') }}"  style="margin: 3px; height:45px">
                    @error('USUARIO_NOME')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="group">
                    <label for="E-mail">Digite seu email:</label>
                    <input type="email" name="USUARIO_EMAIL" placeholder="Email de usuário:" required value="{{ old('USUARIO_EMAIL') }}"  style="margin: 3px; height:45px">
                    @error('USUARIO_EMAIL')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="group">
                        <label for="CPF">Digite seu CPF:</label>
                    <input type="text" name="USUARIO_CPF" placeholder="CPF:" required value="{{ old('USUARIO_CPF') }}"  style="margin: 3px; height:45px">
                    @error('USUARIO_CPF')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="group">
                     <label for="password">Digite sua senha:</label>
                    <input type="password" name="USUARIO_SENHA" placeholder="Sua senha:" required  style="margin: 3px; height:45px">
                    <input type="password" name="USUARIO_SENHA_confirmation" placeholder="Confirme sua senha:" required style="margin: 3px; height:45px">
                    @error('USUARIO_SENHA')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                    </div>


                <input type="submit" value="Cadastrar" style="margin: 5px; height:45px">
            </form>

            <p>Já tem uma conta? <a href="{{ route('login.index') }}">Entrar</a></p>
        </div>
    </section>
@endsection