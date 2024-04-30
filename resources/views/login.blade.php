@extends('layouts.main')
    @section('title', 'Login')
    
    
    @section('content')
    
<body>
    <section class="area-login">
        <div class="login">
                <div>
                    <img src="image/nav/logo.png" alt="">
                </div>

                <form method="POST">
                    <input type="text" name="nome" placeholder="Nome de usuario:" autofocus>
                    <input type="password" name="senha" placeholder="Sua senha:">
                    <input type="submit" name="entrar">
                </form> 
                <p>Ainda nao tem uma conta?<a href="#">Criar Conta</a></p>
        </div>
    </section>
</body>

</html>