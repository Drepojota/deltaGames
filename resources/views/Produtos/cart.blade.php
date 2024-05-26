@extends('layouts.main')
@section('title', 'Carrinho de compras')


@section('content')

<main>
    <div class="page-title">Carrinho de compras</div>
    <div class="content">
        <section>
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                        <th>X</th>
                    </tr>
                </thead>
                <tbody>
                    {{ $total = 0 }}
                    @foreach($carrinho as $item)
                    {{ $total += $item->produto->PRODUTO_PRECO * $item->ITEM_QTD  }}
                    <tr>
                        <td>
                            <div class="produto">
                                <img src="{{$item->produto->Imagem[0]->IMAGEM_URL}}" alt="">
                                <div class="info">
                                    <div class="name">{{$item->produto->PRODUTO_NOME}}</div>
                                </div>
                            </div>
                        </td>
                        <td>R$ {{$item->produto->PRODUTO_PRECO}}</td>
                        <td>
                            <div class="qtd">
                                <span>{{$item->ITEM_QTD}}</span>
                            </div>
                        </td>
                        <td>R$ {{$item->produto->PRODUTO_PRECO}}</td>
                        <td>
                            <button class="delete"><i class='bx bx-x'></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        <aside>
            <div class="box">
                <header>Resumo</header>
                <div class="total"><span>Total</span><br>R$ {{$total}}</div>
                <div class="info">
                    <div class="sub"><span>Á Vista</span></div>
                    <div class="sub"><span>R${{$total}}</span></div>
                    <div class="pag"><span>No Pix</span></div>
                </div>
                <div class="button">
                    <button><img src="/image/carrinho/carrinho2.png">Finalizar Pedido</button>
                </div>
            </div>
        </aside>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection