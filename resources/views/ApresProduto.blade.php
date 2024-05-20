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
            <p>fefefefe</p>
        </div>
    </div>
</section>

@endsection