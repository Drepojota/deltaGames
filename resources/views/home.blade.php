    {{--Importação de layout--}}

    @extends('layouts.main')
    @section('title', 'Homepage')


    @section('content')


    {{--Conteúdo abaixo--}}

    <article>
       
      <div class="container" id="container-popGames"> 
        <h2>Jogos Populares</h2>
        <div class="row row-cols-1 row-cols-md-4">
          <div class="col">
            @foreach ($produtos as $produto)
            <div class="card">
              <a href="{{ asset($produto->PRODUTO_ID) }}" class="card-img"></a>
              @if ($produto->IMAGEM->count() > 0)
              <img src="{{$produto->IMAGEM[0]->IMAGEM_URL }}" alt="">
              @endif
              <div class="card-body">
                <h5 class="card-title">{{ $produto->PRODUTO_NOME }}</h5>
                <p class="card-text">{{ $produto->PRODUTO_PRECO }}</p>
              </div>  
                @endforeach
            </div>
          </div>
        </div>
      </div>
  </article>


    <div class="container" id="container-marcasGames"> 
    <h2>Desenvolvedoras</h2>
    <div class="row row-cols-1 row-cols-md-4">
      <div class="col">
        <div class="card">
          <img src="image/header-carousel/riot.jpg" class="card-img" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="image/header-carousel/nintendo.jpg" class="card-img" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="image/header-carousel/xbox.png" class="card-img" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="image/header-carousel/playstation.jpg" class="card-img" alt="...">
        </div>
      </div>
    </div>
  </div>
  
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
    @endsection