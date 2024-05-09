@extends('layouts.main')
    @section('title', 'Todos os jogos')
    
    
    @section('content')

    <article>
      @foreach($produtos as $produto)
      <div class="col">
        <div class="card">
          <img src="{{ asset($produto->PRODUTO_IMAGEM) }}" class="card-img" alt="{{ $produto->PRODUTO_NOME }}">
          <div class="card-body">
            <h5 class="card-title">{{ $produto->PRODUTO_NOME }}</h5>
            <p class="card-text">{{ $produto->PRODUTO_DESC }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </article>

    @endsection