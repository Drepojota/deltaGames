    {{--Importação de layout--}}

    @extends('layouts.main')
    @section('title', 'Homepage')
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    @section('content')


    {{--Conteúdo abaixo--}}

    <div class="container container-pesquisa">
      <form class="d-flex pesquisa-home" role="search" method="get" action="{{ route('search')}}">
        <input id="search" name="search" class="form-control me-2 barraPesquisa" type="search" placeholder="Encontre jogos e muito mais" aria-label="Search">
      </form>
    </div>

    <div class="container containerHome">
      <div id="carouselExampleCaptions" class="carousel slide carouselHome" data-bs-ride="carousel">
        <div class="carousel-indicators">
          @foreach ($produtos->take(6) as $index => $produto)
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
          @endforeach
        </div>
        <div class="carousel-inner innerHome">
          @foreach ($produtos->take(6) as $index => $produto)
          <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
            @if ($produto->IMAGEM->count() > 0)
            @foreach ($produto->IMAGEM as $imagem)
            <a href="/jogo/{{ $produto->PRODUTO_ID }}">
              <img src="{{ $imagem->IMAGEM_URL }}" class="d-block w-100" alt="" style="height: 600px;">
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
          <h2>Luta</h2>
          <button class="btn-jogo-home">
            <a href="/jogos/2" class="btn-jogo-home-link">Ver Mais</a>
          </button>
        </div>
        @foreach (\App\Models\Categoria::where('CATEGORIA_ID', '2')->first()->Produto->take(6) as $produto)
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
          <h2>Corrida</h2>
          <button class="btn-jogo-home">
            <a href="/jogos/79" class="btn-jogo-home-link">Ver Mais</a>
          </button>
        </div>
        @foreach (\App\Models\Categoria::where('CATEGORIA_ID', '79')->first()->Produto->take(6) as $produto)
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

    <div class="bg-table">
      <div class="container mb-0 pb-4 containerTable-home">
        <table class="table-home">
          <thead class="headTable-home">
            <tr>
              <th colspan="3">
                <button id="allBtn" class="filter-btn active" data-category="all" onclick="filterTable('all')">Todos</button>
                <button class="filter-btn" data-category="cat1" onclick="filterTable('cat1')">Battle Royale</button>
                <button class="filter-btn" data-category="cat2" onclick="filterTable('cat2')">FPS</button>
                <button class="filter-btn" data-category="cat3" onclick="filterTable('cat3')">Simulação</button>
              </th>
            </tr>
          </thead>
          <tbody class="bodyTable-home" id="allTable">
            @foreach ($produtos as $produto)
            <tr class="produto-row py-3 my-3" data-categoria="{{ $produto->categoria->CATEGORIA_NOME }}">
              <td class="imgTable-home">
                <a href="/jogo/{{$produto->PRODUTO_ID}}">
                  @if ($produto->imagem->count() > 0)
                  <img src="{{ $produto->imagem[0]->IMAGEM_URL }}" alt="" style="height:100px; width: 250px; object-fit: cover;">
                  @else
                  <img src="/image/nav/subImg.png" alt="" style="height:100px; width: 250px; object-fit: cover;">
                  @endif
                </a>
              </td>
              <td>
                <a href="/jogo/{{$produto->PRODUTO_ID}}">
                  <h5 class="titleTable-home">{{ $produto->PRODUTO_NOME ? $produto->PRODUTO_NOME : 'Produto não identificado' }}</h5>
                  <p class="txtTable-home">{{ $produto->categoria->CATEGORIA_NOME }}</p>
                </a>
              </td>
              <td class="precoTable-home">
                @if ($produto->PRODUTO_PRECO == 0.00 || $produto->PRODUTO_PRECO == "00.00")
                Gratuito
                @else
                R$ {{ number_format($produto->PRODUTO_PRECO, 2, ',', '.') }}
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>

          <tbody class="bodyTable-home hidden" id="cat1Table">
            @foreach (\App\Models\Categoria::where('CATEGORIA_ID', '1')->first()->Produto as $produto)
            <tr class="produto-row" data-categoria="{{ $produto->categoria->CATEGORIA_NOME }}">
              <td class="imgTable-home">
                <a href="/jogo/{{$produto->PRODUTO_ID}}">
                  @if ($produto->imagem->count() > 0)
                  <img src="{{ $produto->imagem[0]->IMAGEM_URL }}" alt="" style="height:100px; width: 250px; object-fit: cover;">
                  @else
                  <img src="/image/nav/subImg.png" alt="" style="height:100px; width: 250px; object-fit: cover;">
                  @endif
                </a>
              </td>
              <td>
                <a href="/jogo/{{$produto->PRODUTO_ID}}">
                  <h5 class="titleTable-home">{{ $produto->PRODUTO_NOME ? $produto->PRODUTO_NOME : 'Produto não identificado' }}</h5>
                  <p class="txtTable-home">{{ $produto->categoria->CATEGORIA_NOME }}</p>
                </a>
              </td>
              <td class="precoTable-home">
                @if ($produto->PRODUTO_PRECO == 0.00 || $produto->PRODUTO_PRECO == "00.00")
                Gratuito
                @else
                R$ {{ number_format($produto->PRODUTO_PRECO, 2, ',', '.') }}
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>

          <tbody class="bodyTable-home hidden" id="cat2Table">
            @foreach (\App\Models\Categoria::where('CATEGORIA_ID', '85')->first()->Produto as $produto)
            <tr class="produto-row" data-categoria="{{ $produto->categoria->CATEGORIA_NOME }}">
              <td class="imgTable-home">
                <a href="/jogo/{{$produto->PRODUTO_ID}}">
                  @if ($produto->imagem->count() > 0)
                  <img src="{{ $produto->imagem[0]->IMAGEM_URL }}" alt="" style="height:100px; width: 250px; object-fit: cover;">
                  @else
                  <img src="/image/nav/subImg.png" alt="" style="height:100px; width: 250px; object-fit: cover;">
                  @endif
                </a>
              </td>
              <td>
                <a href="/jogo/{{$produto->PRODUTO_ID}}">
                  <h5 class="titleTable-home">{{ $produto->PRODUTO_NOME ? $produto->PRODUTO_NOME : 'Produto não identificado' }}</h5>
                  <p class="txtTable-home">{{ $produto->categoria->CATEGORIA_NOME }}</p>
                </a>
              </td>
              <td class="precoTable-home">
                <a href="/jogo/{{$produto->PRODUTO_ID}}" style="color: #fff;">
                  @if ($produto->PRODUTO_PRECO == 0.00 || $produto->PRODUTO_PRECO == "00.00")
                  Gratuito
                  @else
                  R$ {{ number_format($produto->PRODUTO_PRECO, 2, ',', '.') }}
                  @endif
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>

          <tbody class="bodyTable-home hidden" id="cat3Table">
            @foreach (\App\Models\Categoria::where('CATEGORIA_ID', '89')->first()->Produto as $produto)
            <tr class="produto-row" data-categoria="{{ $produto->categoria->CATEGORIA_NOME }}">
              <td class="imgTable-home">
                <a href="/jogo/{{$produto->PRODUTO_ID}}">
                  @if ($produto->imagem->count() > 0)
                  <img src="{{ $produto->imagem[0]->IMAGEM_URL }}" alt="" style="height:100px; width: 250px; object-fit: cover;">
                  @else
                  <img src="/image/nav/subImg.png" alt="" style="height:100px; width: 250px; object-fit: cover;">
                  @endif
                </a>
              </td>
              <td>
                <a href="/jogo/{{$produto->PRODUTO_ID}}">
                  <h5 class="titleTable-home">{{ $produto->PRODUTO_NOME ? $produto->PRODUTO_NOME : 'Produto não identificado' }}</h5>
                  <p class="txtTable-home">{{ $produto->categoria->CATEGORIA_NOME }}</p>
                </a>
              </td>
              <td class="precoTable-home">
                <a href="/jogo/{{$produto->PRODUTO_ID}}" style="color: #fff;">
                  <p>
                    @if ($produto->PRODUTO_PRECO == 0.00 || $produto->PRODUTO_PRECO == "00.00")
                    Gratuito
                    @else
                    R$ {{ number_format($produto->PRODUTO_PRECO, 2, ',', '.') }}
                    @endif
                  </p>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>

        </table>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @endsection