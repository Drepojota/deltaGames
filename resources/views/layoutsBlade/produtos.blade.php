{{--Importação de layout--}}

@extends('layouts.main')
    @section('title', 'Produtos')
    
    
    @section('content')

    {{--Conteúdo abaixo--}}

    <section>
        <container class="carousel-valorantPage">
        <div class="Carousel-valorant">
            <img id="valorant-imgCompras" src="image/ValorantPage/partida6.jpg" alt="">
      
        <div id="compras-carousel"> 
            <img id="setaEsq-valorantPage" src="image/ValorantPage/setavalorantEsq.png">
            <img class="carousel-pageCompra" src="image/ValorantPage/partida1.jpg">
            <img class="carousel-pageCompra" src="image/ValorantPage/partida2.jpg">
            <img class="carousel-pageCompra" src="image/ValorantPage/partida4.jpg">
            <img class="carousel-pageCompra" src="image/ValorantPage/partida5.jpg">
             <img id="setaDir-valorantPage" src="image/ValorantPage/setaValorant.png">
        </div>
        </div>
        <div class="banner-history">
        <img class="bannerGame" src="image/ValorantPage/bannerValorant.jpg">
        <p class="valorantHistory">
            <strong>"Valorant",  é um jogo de tiro tático que combina elementos de estratégia em equipe e 
                     habilidades únicas de agentes. Ambientado em um futuro distópico, os jogadores se dividem em duas 
                     equipes, cada uma com o objetivo de plantar ou desarmar uma bomba em locais estratégicos do mapa.
                     Com mecânicas de tiro precisas e habilidades especiais dos agentes, o jogo oferece uma grande experiência 
                     envolvente e competitiva.</strong>
         </p>
        </div>
        
    </container>   
    <div class ="barra-compra"> 
      <p class="descriptionValue">
        Gratuito
      </p> 
      <button class="BtnCompra">Jogar</button>
        </div>
    </section>
  @endsection