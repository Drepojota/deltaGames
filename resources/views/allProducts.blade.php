@extends('layouts.main')
@section('title', 'Todos os jogos')
<style>
  .body {
    background-color: #2c2c2c;
  }
</style>

@section('content')

<div class="body">
  <article>
    <h1 class="page-title">Todos os Jogos</h1>
    <div class="customDrop container">
      <div class="txt-info">
        <p>Mostrando <span id="totalJogos">{{ count($produtos) }}</span> jogos</p>
      </div>
      <div class="orderConfig">
        <div class="txt-order">
          <p>Ordenar por:</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="meuDropdown" aria-expanded="false" data-toggle="dropdown" aria-haspopup="true">
            Escolha a Ordenação
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: #333232;">
            <li><a class="dropdown-item" href="#" onclick="ordenarJogos('AZ', 'A-Z')">A-Z</a></li>
            <li><a class="dropdown-item" href="#" onclick="ordenarJogos('ZA', 'Z-A')">Z-A</a></li>
            <li><a class="dropdown-item" href="#" onclick="ordenarJogos('menorPreco', 'Menor Preço')">Menor Preço</a></li>
            <li><a class="dropdown-item" href="#" onclick="ordenarJogos('maiorPreco', 'Maior Preço')">Maior Preço</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
    <div class="row" id="jogosContainer">
        @foreach ($produtos as $produto)
        <div class="col-md-2 jogo">
            <div class="card">
                @if ($produto->IMAGEM->count() > 0)
                <img src="{{$produto->IMAGEM[0]->IMAGEM_URL }}" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $produto->PRODUTO_NOME }}</h5>
                    <p class="card-text-price">{{ $produto->PRODUTO_PRECO }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>





  </article>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</div>

@endsection