@extends('layouts.main')
@section('title', 'Todos os jogos')
<style>
  .body {
    background-color: #2c2c2c;
  }
</style>

@section('content')

<div class="body">

  <div class="container container-pesquisa">
    <form class="d-flex pesquisa-home" role="search">
      <input id="search" class="form-control me-2 barraPesquisa" type="search" placeholder="Encontre jogos e muito mais" aria-label="Search">
    </form>
  </div>

  <article>
    <div class="filtroCat container">
      <div class="title-page d-flex align-items-center">
        <h1 style="color: #fff;">{{$categoria->CATEGORIA_NOME}}</h1>
        <div class="dropdown dropdown-filtro ml-3">
          <button class="btn btn-secondary btn-filtro" type="button" aria-expanded="false" data-toggle="dropdown" aria-haspopup="true">
            <i class="bi bi-chevron-down"></i>
          </button>
          <ul class="dropdown-menu menu-filtro" aria-labelledby="dropdownMenuButton">
            @foreach(\App\Models\Categoria::all() as $cat)
            <li><a class="dropdown-item item-filtro" href="/jogos/{{$cat->CATEGORIA_ID}}">{{$cat->CATEGORIA_NOME}}</a></li>
            @endforeach
            <li><a class="dropdown-item item-filtro" href="/jogos">Todos os Jogos</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="customDrop container">
      <div class="txt-info">
        <p>Mostrando <span id="totalJogos">{{ $contagemProdutos }}</span> resultados</p>
      </div>
      <div class="orderConfig">
        <div class="txt-order">
          <p>Ordenar por:</p>
        </div>
        <div class="dropdown dropdown-order">
          <button class="btn btn-secondary dropdown-toggle btn-order" type="button" id="dropdownFiltro" aria-expanded="false" data-toggle="dropdown" aria-haspopup="true">
            Escolha a Ordenação
          </button>
          <ul class="dropdown-menu menu-order" aria-labelledby="dropdownMenuButton" style="background-color: #333232;">
            <li><a class="dropdown-item item-order" href="#" onclick="ordenarJogos('AZ', 'A-Z')">A-Z</a></li>
            <li><a class="dropdown-item item-order" href="#" onclick="ordenarJogos('ZA', 'Z-A')">Z-A</a></li>
            <li><a class="dropdown-item item-order" href="#" onclick="ordenarJogos('menorPreco', 'Menor Preço')">Menor Preço</a></li>
            <li><a class="dropdown-item item-order" href="#" onclick="ordenarJogos('maiorPreco', 'Maior Preço')">Maior Preço</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row" id="jogosContainer">
        @foreach ($categoria->Produto as $produto)
        <div class="col-md-2 jogo">
          <a href="/jogo/{{$produto->PRODUTO_ID}}" class="card-link">
            <div class="card">
              @if ($produto->IMAGEM->count() > 0)
              <img src="{{ $produto->IMAGEM[0]->IMAGEM_URL }}" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
              @else
              <img src="/image/nav/subImg.png" class="card-img-top" alt="Imagem Padrão" style="height: 200px; object-fit: cover;">
              @endif
              <div class="card-body">
                <h5 class="card-title">{{ $produto->PRODUTO_NOME ? $produto->PRODUTO_NOME : 'Produto não identificado' }}</h5>
                <p class="card-text-price">R$ {{ number_format($produto->PRODUTO_PRECO, 2, ',', '.') }}</p>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>





  </article>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

@endsection