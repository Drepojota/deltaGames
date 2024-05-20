@extends('layouts.main')
@section('title', 'Cadastro')


@section('content')



    <section class="area-cadastro">
        <div class="login">
            <div>
                <img src="image/nav/logo.png" alt="">
            </div>

            <form method="POST" action="{{ route('cadastro.store') }}">
                @csrf
                <input type="text" name="USUARIO_NOME" placeholder="Nome de usuario:" autofocus>
                <div class="confirm-email">
                    <input type="email" name="USUARIO_EMAIL" placeholder="Email de usuário:" required autofocus>
                </div>
                <input type="password" name="USUARIO_SENHA" placeholder="Sua senha:" required>
                <input type="submit" value="Entrar">
            </form>
            <p>Já tem uma conta?<a href="#">Entrar</a></p>
        </div>
    </section>


@endsection
