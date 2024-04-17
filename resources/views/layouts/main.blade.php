<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="style.css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="#"><img src="image/nav/menu.png" alt=""></a>
            <div class="navbar-brand">
                <a class="navbar-brand" href="#"><img class="img-logo" src="/image/nav/logo.png" alt=""></a>
            </div>
            <div class="navbar-buttons">
                <form class="d-flex" role="search">
                    <a href="cart.html"><img src="image/nav/carrinho.png"></a>
                    <button class="btn" type="submit"><img src="image/nav/lupa.png" alt=""></button>
                </form>
            </div>
        </div>
    </nav>
  </header>
  
    @yield('content')
   
    <footer>
      <div class="rodape">
          <div>
              <span>Copyright &copy; 2024 Delta</span>
          </div>
          <div>
              <span>Termos de uso</span>
              <span>| Politica |</span>
              <span>Suporte</span>
          </div>
      </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>
</html>