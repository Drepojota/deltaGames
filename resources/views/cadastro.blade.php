@extends('layouts.main')
    @section('title', 'Cadastro')
    
    
    @section('content')
    

<body>
    <section class="area-login">
        <div class="login">
                <div>
                    <img src="image/nav/logo.png" alt="">
                </div>

                <form method="POST">
                    <input type="text" name="nome" placeholder="Nome de usuario:" autofocus>
                    <div class="confirm-email">
                        <input style="width: 46%; margin-right: 10px;" type="text" name="email" placeholder="Digite seu email:" autofocus>
                        <input style="width: 46%;" type="text" name="email" placeholder="Confirme seu email:" autofocus>
                    </div>
                    <input type="password" name="senha" placeholder="Crie Sua senha:">
                    <input type="submit" name="entrar">
                </form> 
                <p>Já tem uma conta?<a href="#">Entrar</a></p>
        </div>
    </section>
</body>

</html>