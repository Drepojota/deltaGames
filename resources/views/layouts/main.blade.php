<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/style.css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="icon" type="image/png" sizes="16x16" href="/image/favicon_io/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/image/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="/image/favicon_io/favicon-48x48.png">
    <link rel="icon" type="image/png" sizes="64x64" href="/image/favicon_io/favicon-64x64.png">
    <link rel="icon" type="image/svg+xml" href="image/favicon_io/favicon.svg">
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="image/favicon_io/apple-touch-icon.png">
    <!-- Android/Chrome Icon -->
    <link rel="icon" sizes="192x192" href="image/favicon_io/android-chrome-192x192.png">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <?php
    use Illuminate\Support\Facades\Auth;
    ?>
</head>

<body>
    <div class="wrapper">
        <nav class="nav-menu">
            <ul>
                <li class="item-menu">
                    <a href="/home">
                        <span class="icon"><i class="bi bi-house"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="/jogos">
                        <span class="icon"><i class="bi bi-controller"></i></span>
                        <span class="txt-link">Games</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="{{ Auth::check() ? route('cart') : route('login.index', ['redirect' => 'cart']) }}">
                        <span class="icon"><i class="bi bi-cart"></i></span>
                        <span class="txt-link">Cart</span>
                    </a>
                </li>

                <li class="item-menu item-user">
                    @if(\Auth::check())
                    <a href="#">
                        <span class="icon"><i class="bi bi-person-circle"></i></span>
                        <?php $nomeUsuario = explode(' ', Auth::user()->USUARIO_NOME)[0]; ?>
                        <span class="txt-link">{{ $nomeUsuario }}</span>
                        <a href="{{ route('logout') }}"><i class="bi bi-box-arrow-right iconLogout"></i></a>
                    </a>
                    @else
                    <a href="/login">
                        <span class="icon"><i class="bi bi-person-circle"></i></span>
                        <span class="txt-link">Login</span>
                    </a>
                    @endif
                </li>

            </ul>
        </nav>
        <div class="main-content">
            @yield('content')
        </div>
        <footer class="footer-main">
            <div class="rodape-footer">
                <div class="txt-footer">
                    <span>&copy; Delta 2024</span>
                </div>
                <div class="txt-footer">
                    <span>Termos de uso</span>
                    <span>Política</span>
                    <span>Suporte</span>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/script/main.js"></script>
</body>

</html>