@extends('layouts.main')
    @section('title', 'Todos os jogos')
    
    
    @section('content')

    <article>
        <div class="container" id="container-popGames"> 
          <h2>Jogos Populares</h2>
          <div class="row row-cols-1 row-cols-md-4">
            @foreach($produtos as $produto)
            <div class="col">
              <div class="card">
                <img src="{{ asset($produto->PRODUTO_IMAGEM) }}" class="card-img">
                <div class="card-body">
                  <h5 class="card-title">{{ $produto->PRODUTO_NOME }}</h5>
                  <p class="card-text">{{ $produto->PRODUTO_DESC }}</p>
                </div>  
                  @endforeach
              </div>
            </div>
          </div>
        </div>
    </article>
  

    @endsection