@extends('layouts.main')
    @section('title', 'Todos os jogos')
    
    
    @section('content')

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
                  <p class="card-text">{{ $produto->PRODUTO_DESC }}</p>
                  <p class="card-text">{{ $produto->PRODUTO_PRECO }}</p>
                </div>  
                  @endforeach
              </div>
            </div>
          </div>
        </div>
    </article>
  

    @endsection