    {{--Importação de layout--}}

    @extends('layouts.main')
    @section('title', 'Homepage')


    @section('content')


    {{--Conteúdo abaixo--}}

    <article>
      <div class="container">
        <div class="row" id="jogosContainer">
          @foreach (\App\Models\Categoria::where('CATEGORIA_ID', '1')->first()->Produto->take(8) as $produto)
          <div class="col-md-2 jogo">
            <div class="card">
              @if ($produto->IMAGEM->count() > 0)
              <img src="{{$produto->IMAGEM[0]->IMAGEM_URL }}" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
              @endif
              <div class="card-body">
                <h5 class="card-title">{{ $produto->PRODUTO_NOME }}</h5>
                <p class="card-text-price">R$ {{ $produto->PRODUTO_PRECO }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

      @endsection