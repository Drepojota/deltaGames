@extends('layouts.main')
@section('title', 'Login')

@section('content')
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
                        <label class="text-box" for="identifier">Digite seu E-mail ou CPF:</label>
                        <input type="text" name="identifier" placeholder="E-mail ou CPF de usuário" required autofocus value="{{ old('identifier') }}" style="margin: 3px; height:45px">
                        @error('identifier')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="text-box" for="password">Digite sua senha:</label>
                        <input type="password" name="USUARIO_SENHA" placeholder="Sua senha" required style="margin: 3px; height:45px">
                        @error('USUARIO_SENHA')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <input type="submit" value="Iniciar sessão">
                </form>

                <p>Não tem uma conta? <a href="{{ route('register.show') }}">Registre-se</a></p>
            </div>
        </section>
@endsection
