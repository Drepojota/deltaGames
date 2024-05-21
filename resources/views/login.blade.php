@extends('layouts.main')
@section('title', 'Login')

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

    .lowhome h2{
        font-size: 20px;
        margin-top:50px ;
        color: aliceblue;
    }

</style>


@section('content')
    <a href="{{ route('homee') }}">Home</a>
    <h2>Login</h2>

    @if (auth()->check())
        <p>Already logged in as {{ auth()->user()->USUARIO_NOME }} | <a href="{{ route('login.destroy') }}">Logout</a></p>
    @else
        <section class="area-login">
            <div class="login">
                @if(session()->has('success'))
                    <div class="success-message">{{ session()->get('success') }}</div>
                @endif

                <div>
                    <img src="{{ asset('image/nav/logo.png') }}" alt="Logo">
                </div>

                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
  
                        <input type="email" name="USUARIO_EMAIL" placeholder="Email de usuário:" required autofocus value="{{ old('USUARIO_EMAIL') }}">
                        @error('USUARIO_EMAIL')
                            <span class="error-message">{{ $message }}</span>
                        @enderror

                
                        <input type="password" name="USUARIO_SENHA" placeholder="Sua senha:" required>
                        @error('USUARIO_SENHA')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    
                    <input type="submit" value="Entrar">
                </form>

                <p>Ainda não tem uma conta? <a href="{{ route('register.show') }}">Criar Conta</a></p>

                <div class="lowhome">
                    <h2>Login <a href="{{ route('homee') }}">Home</a></h2>
                </div>

            </div>
        </section>
    @endif
@endsection