{{--Importação de layout--}}

@extends('layouts.main')
@section('title', 'Produtos')


@section('content')

{{--Conteúdo abaixo--}}
<section class="section-apres">
    <div class="container container-apres">
        <div class="bloco1-apres">
            <div class="txt-apres">
                <h1>{{$produto->PRODUTO_NOME}}</h1>
                <p>{{$produto->PRODUTO_DESC}}</p>
                <p>{{ $produto->categoria->CATEGORIA_NOME}}</p>
            </div>
            <div class="container-compra-apres">
                <div class="compra-apres">
                    <div class="txt-tituloCompra">
                        <h5>{{$produto->PRODUTO_NOME}}</h5>
                    </div>
                    <div class="txtCompra-apres">
                        <button>Adquirir</button>
                        <div class="p-apres">
                            <p>{{$produto->PRODUTO_PRECO}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bloco2-apres">
            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-apres" data-bs-ride="carousel">
                <div class="carousel-inner inner-apres">
                    @foreach ($produto->Imagem as $index => $imagem)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }} carouselItem-apres">
                        <img src="{{ $imagem->IMAGEM_URL }}" class="d-block w-100" alt="...">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

</section>

@endsection