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
            <strong></strong>
         </p>
        </div>
        
    </container>   
    <div class ="barra-compra"> 
      <p class="descriptionValue">
        
      </p> 
      <button class="BtnCompra">Jogar</button>
        </div>
    </section>
  @endsection