@extends('layouts.main')
@section('title', 'Produtos')

@section('content')

<div class="container container-pesquisa">
    <form class="d-flex pesquisa-home" role="search" method="get" action="{{ route('search')}}">
        <input id="search" name="search" class="form-control me-2 barraPesquisa" type="search" placeholder="Encontre jogos e muito mais" aria-label="Search">
    </form>
</div>

<section class="section-apres">
    <div class="container container-apres">
        <div class="bloco1-apres">
            <div class="txt-apres">
                <h1>{{ $produto->PRODUTO_NOME }}</h1>
                <p class="cat-desc">{{ $produto->PRODUTO_DESC }}</p>
                <p class="cat-apres">{{ $produto->categoria->CATEGORIA_NOME }}</p>
            </div>
            <div class="container-compra-apres">
                <div class="compra-apres">
                    <div class="txt-tituloCompra">
                        <h5>{{ $produto->PRODUTO_NOME }}</h5>
                    </div>
                    <div class="txtCompra-apres">
                        <form action="{{ Auth::check() ? route('cart.add', ['produto_id' => $produto->PRODUTO_ID]) : route('login.index') }}" method="POST">
                            @csrf
                            @if (Auth::check())
                            <button type="submit" class="acquire-button">Adquirir</button>
                            @else
                            <a href="{{ route('login.index') }}" class="acquire-button">Adquirir</a>
                            @endif
                        </form>
                        <div class="p-apres">
                            <p>
                                @if ($produto->PRODUTO_PRECO == 0.00 || $produto->PRODUTO_PRECO == "00.00")
                                Gratuito
                                @else
                                R$ {{ number_format($produto->PRODUTO_PRECO, 2, ',', '.') }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bloco2-apres">
            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-apres" data-bs-ride="carousel">
                <div class="carousel-inner inner-apres">
                    @foreach ($produto->Imagem as $index => $imagem)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }} carouselItem-apres">
                        <img src="{{ $imagem->IMAGEM_URL }}" class="d-block w-100" alt="...">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="apresSem">
    <div class="container containerJogos-home">
        <div class="row" id="jogosContainer">
            <div class="txtContainer-jogo">
                <h2>Jogos semelhantes</h2>
                <button class="btn-jogo-home">
                    <a href="/jogos/{{$produto->categoria->CATEGORIA_ID}}" class="btn-jogo-home-link">Ver Mais</a>
                </button>
            </div>
            @foreach ($produtosSemelhantes as $produto)
            <div class="col-md-2 jogo">
                <a href="/jogo/{{$produto->PRODUTO_ID}}" class="card-link">
                    <div class="card">
                        @if ($produto->Imagem->count() > 0)
                        <img src="{{ $produto->Imagem[0]->IMAGEM_URL }}" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                        @else
                        <img src="/image/nav/subImg.png" class="card-img-top" alt="Imagem Padrão" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $produto->PRODUTO_NOME ? $produto->PRODUTO_NOME : 'Produto não identificado' }}</h5>
                            <p class="card-text-price">
                                @if ($produto->PRODUTO_PRECO == 0.00 || $produto->PRODUTO_PRECO == "00.00")
                                Gratuito
                                @else
                                R$ {{ number_format($produto->PRODUTO_PRECO, 2, ',', '.') }}
                                @endif
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection