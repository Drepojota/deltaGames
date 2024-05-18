
<h5 class="card-title">{{ $categoria->CATEGORIA_NOME }}</h5>
<p class="card-text-price">{{ $categoria->CATEGORIA_DESC }}</p>
@foreach($categoria->Produto as $produto)
    <p>{{$produto->PRODUTO_NOME}}</p>

@endforeach