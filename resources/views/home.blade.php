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
            <img class="img-carousel"src="image/header-carousel/godrag.jpg" class="d-block" alt="...">
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
      <div class="container" id="container-popGames"> 
        <h2>Jogos Populares</h2>
        <div class="row row-cols-1 row-cols-md-4">
          <div class="col">
            <div class="card">
              <img src="image/header-carousel/fifa.jpeg" class="card-img" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$CATEGORIA->CATEGORIA_ID}}</h5>
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
        </div>
        <div class="col">
          <div class="card">
            <img src="image/header-carousel/godrag.jpg" class="card-img" alt="...">
            <div class="card-body">
              <h5 class="card-title">God Of War - Ragnarok</h5>
              <p class="card-text"><strong>R$429,00</strong></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a href="valorant.html"><img src="image/header-carousel/valorant.jpg" class="card-img" alt="..."></a>
            <div class="card-body">
              <h5 class="card-title">Valorant</h5>
              <p class="card-text">R$0,00</p>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <div class="container" id="container-espGames"> 
      <h2> Esporte</h2>
      <div class="row row-cols-1 row-cols-md-4">
        <div class="col">
          <div class="card">
            <img src="image/header-carousel/fifa.jpeg" class="card-img" alt="...">
            <div class="card-body">
              <h5 class="card-title">EA Sport FC 24</h5>
              <p class="card-text"><strong>R$249,90</strong></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/header-carousel/2k24-basquete.jpeg" class="card-img" alt="...">
            <div class="card-body">
              <h5 class="card-title">2k24 - NBA</h5>
              <p class="card-text"><strong>R$189,00</strong></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/header-carousel/Tennis-World-Tour-1.jpg" class="card-img" alt="...">
            <div class="card-body">
              <h5 class="card-title">Tennis World Tour 1</h5>
              <p class="card-text"><strong>R$149,00</strong></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/header-carousel/ufc5.jpg" class="card-img" alt="...">
            <div class="card-body">
              <h5 class="card-title">UFC 5</h5>
              <p class="card-text">R$99,00</p>
            </div>
          </div>
        </div>
      </div>
    </div>

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
    <div class="container" id="container-marcasGames2"> 
      <div class="row row-cols-1 row-cols-md-4">
        <div class="col">
          <div class="card">
            <img src="image/header-carousel/playstore.jpg" class="card-img" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/header-carousel/ea-sports.png" class="card-img" alt="...">
             </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/header-carousel/ubisoft.jpg" class="card-img" alt="...">
            </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/header-carousel/ubisoft.jpg" class="card-img" alt="...">
            </div>
        </div>
      </div>  
    </div> 
  
    </article>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>



     

    @endsection