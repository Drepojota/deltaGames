@extends('layouts.main')
@section('title', 'Login')


@section('content')
    @if (auth()->check())
        <p>Already logged in as {{ auth()->USUARIO()->USUARIO_NOME }} | <a href="{{ route('login.destroy') }}">Logout</a></p>
    @else
        <section class="container">
            <div class="login">
                @if(session()->has('success'))
                    <div class="success-message">{{ session()->get('success') }}</div>
                @endif

                <div>
                    <img src="{{ asset('image/nav/logo.png') }}" alt="Logo">
                </div>

                <form class="formulario" action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="text-box" for="email">Digite o seu E-mail:</label>
                        <input type="email" name="USUARIO_EMAIL"  placeholder="Email de usuário:" required autofocus value="{{ old('USUARIO_EMAIL') }}" style="margin: 3px; height:45px" >
                        @error('USUARIO_EMAIL')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="text-box" for="password">Digite sua senha:</label>
                        <input type="password" name="USUARIO_SENHA" placeholder="Sua senha:" required  style="margin: 3px; height:45px">
                        @error('USUARIO_SENHA')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                        <input type="submit" value="Iniciar sessão">
                </form>

                <p>Não tem uma conta? <a href="{{ route('register.show') }}">Registre-se no Delta</a></p>
            </div>
        </section>
    @endif
@endsection