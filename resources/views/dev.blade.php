    {{--Importação de layout--}}

@extends('layouts.main')
    @section('title', 'Riot page')
    
    
    @section('content')
   

    {{--Conteúdo abaixo--}}

    <img src="image/pagRiot/imgRiot.jpg" class="img-fluid" alt="" style="width:100%; height: 800px;">

    <section class="container">
        
        @foreach ($PRODUTO as $produto)
        <div style="flex: 1 1 300px; margin-bottom: 30px;">
            <img src="image/pagRiot/lol.jpg" class="cards" alt="">
            <link rel="stylesheet" href="">
        </div>
        <div class="desc" style="flex: 1 1 300px; margin-bottom: 30px;">
            <p class="text" style="margin: 60px;">
                <h2 style="text-align: center;">{{ $PRODUTO ->PRODUTO_NOME }}</h2>
                <p class="text">{{ $PRODUTO ->$PRODUTO_DESC }}</p>
        </div>
        
        <div style="flex: 1 1 300px; margin-bottom: 30px;">
            <img src="image/pagRiot/imgValorant.PNG" class="cards" alt="">
            <link rel="stylesheet" href="valorant.html">
        </div>
        <div class="desc" style="flex: 1 1 300px; margin-bottom: 30px;">
            <p class="text" style="margin: 60px;">
                <h2 style="text-align: center;">Valorant</h2>
                <p class="textos">"Valorant",  é um jogo de tiro tático que combina elementos de estratégia em equipe e 
                    habilidades únicas de agentes. Ambientado em um futuro distópico, os jogadores se dividem em duas 
                    equipes, cada uma com o objetivo de plantar ou desarmar uma bomba em locais estratégicos do mapa. 
                    Com mecânicas de tiro precisas e habilidades especiais dos agentes, o jogo oferece uma grande experiência 
                    envolvente e competitiva.
                </p>
        </div>

        <div style="flex: 1 1 300px; margin-bottom: 30px;">
            <img src="image/pagRiot/tactics.PNG" class="cards" alt="">
            <link rel="stylesheet" href="">
        </div>
        <div class="desc" style="flex: 1 1 300px; margin-bottom: 30px;">
            <p class="text" style="margin: 60px;">
                <h2 style="text-align: center;">TeamFight</h2>
                <p class="text">"Teamfight Tactics", da Riot Games, é um jogo de estratégia autochess onde os 
                    jogadores montam equipes com campeões de "League of Legends". Posicionando-os em um tabuleiro,
                     eles competem contra outros para alcançar a vitória. Gerenciando recursos como ouro e itens, 
                    os jogadores devem tomar decisões estratégicas para superar os oponentes em batalhas desafiadoras.
                </p>
        </div>

    </section>
@endsection