    {{--Importação de layout--}}

    @extends('layouts.main')
    @section('title', 'Homepage')


    @section('content')


    {{--Conteúdo abaixo--}}

    <div class="container container-pesquisa">
      <form class="d-flex pesquisa-home" role="search">
        <input class="form-control me-2 barraPesquisa" type="search" placeholder="Encontre jogos e muito mais" aria-label="Search">
      </form>
    </div>


    <div class="container containerHome">
      <div id="carouselExampleCaptions" class="carousel slide carouselHome" data-bs-ride="carousel">
        <div class="carousel-indicators">
          @foreach ($produtos->take(8) as $index => $produto)
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
          @endforeach
        </div>
        <div class="carousel-inner innerHome">
          @foreach ($produtos as $index => $produto)
          <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
            @if ($produto->IMAGEM->count() > 0)
            @foreach ($produto->IMAGEM as $imagem)
            <a href="/jogo/{{$produto->PRODUTO_ID}}">
              <img src="{{ $imagem->IMAGEM_URL }}" class="d-block w-100" alt="" style="height: 400px;">
            </a>
            @break
            @endforeach
            @endif
            <div class="carousel-caption d-none d-md-block txt-carouselHome">
              <h5>{{ $produto->PRODUTO_NOME }}</h5>
            </div>
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>


    <div class="container container-btn">
      <button class="btn btn-secondary btn-order">
        <a href="/jogos" class="btn-home-link">Ver todos os jogos</a>
      </button>
    </div>

    <div class="container containerJogos-home">
      <div class="row" id="jogosContainer">
        <div class="txtContainer-jogo">
          <h2>Battle Royale</h2>
          <button class="btn-jogo-home">
            <a href="/jogos/1" class="btn-jogo-home-link">Ver Mais</a>
          </button>
        </div>
        @foreach (\App\Models\Categoria::where('CATEGORIA_ID', '1')->first()->Produto->take(6) as $produto)
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
                <p class="card-text-price">R$ {{ $produto->PRODUTO_PRECO }}</p>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>

    <div class="containerCat-home">
      <div class="container containerJogos-home">
        <div class="row" id="jogosContainer">
          <div class="txtContainer-jogo">
            <h2>Navegue por Nossas Categorias</h2>
          </div>
          @foreach ($filtroCategorias as $categoria)
          <div class="col-md-2 jogo">
            <a href="/jogos/{{ $categoria->CATEGORIA_ID }}" class="card-link">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $categoria->CATEGORIA_NOME }}</h5>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="container containerJogos-home">
      <div class="row" id="jogosContainer">
        <div class="txtContainer-jogo">
          <h2>Simulação</h2>
          <button class="btn-jogo-home">
            <a href="/jogos/89" class="btn-jogo-home-link">Ver Mais</a>
          </button>
        </div>
        @foreach (\App\Models\Categoria::where('CATEGORIA_ID', '89')->first()->Produto->take(6) as $produto)
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
                <p class="card-text-price">R$ {{ $produto->PRODUTO_PRECO }}</p>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    @endsection