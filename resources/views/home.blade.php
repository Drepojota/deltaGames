    {{--Importação de layout--}}

    @extends('layouts.main')
    @section('title', 'Homepage')


    @section('content')


    {{--Conteúdo abaixo--}}

    <main>
      <div id="carouselExampleIndicators" class="carousel slide mt-3">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-carousel" src="image/header-carousel/fifa.jpeg" class="d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img class="img-carousel" src="image/header-carousel/forza.jpg" class="d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img class="img-carousel" src="image/header-carousel/godrag.jpg" class="d-block" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </main>

    <article>
      @foreach($produtos as $produto)
      <div class="col">
        <div class="card">
          <img src="{{ asset($produto->PRODUTO_IMAGEM) }}" class="card-img" alt="{{ $produto->PRODUTO_NOME }}">
          <div class="card-body">
            <h5 class="card-title">{{ $produto->PRODUTO_NOME }}</h5>
            <p class="card-text">{{ $produto->PRODUTO_DESC }}</p>
<<<<<<< HEAD
    @foreach($produtos as $produto)
<div class="col">
    <div class="card">
        <img src="{{ asset($produto->imagem) }}" class="card-img" alt="{{ $produto->nome }}">
        <div class="card-body">
            <h5 class="card-title">{{ $produto->nome }}</h5>
            <p class="card-text"><strong>R${{ $produto->preco }}</strong></p>
=======
      <div class="container" id="container-popGames"> 
        <h2>Jogos Populares</h2>
        <div class="row row-cols-1 row-cols-md-4">
          <div class="col">
            <div class="card">
              <img src="image/header-carousel/fifa.jpeg" class="card-img" alt="...">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><strong>R$249,90</strong></p>
              </div>
            </div>
          </div>
        <div class="col">
          <div class="card">
            <img src="image/header-carousel/forza.jpg" class="card-img" alt="...">
             <div class="card-body">
                <h5 class="card-title">Forza Horizon 5</h5>
                 <p class="card-text"><strong>R$379,00</strong></p>
             </div>
          </div>
>>>>>>> a820dbd76afdee74a2015aa6b39c042223ca38c9
        </div>
    </div>
</div>
@endforeach

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
      @endforeach
    </article>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    @endsection