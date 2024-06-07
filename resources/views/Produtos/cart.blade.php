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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $desconto = 0.85;
                    $total = 0;
                    @endphp
                    @foreach($carrinho as $item)
                    @php
                    $itemTotal = $item->produto->PRODUTO_PRECO * $item->ITEM_QTD;
                    $total += $itemTotal;
                    @endphp
                    <tr>
                        <td>
                            <div class="produto">
                                <img src="{{$item->produto->Imagem[0]->IMAGEM_URL}}" alt="">
                                <div class="info">
                                    <div class="name">{{$item->produto->PRODUTO_NOME}}</div>
                                </div>
                            </div>
                        </td>
                        <td>R$ {{ number_format($item->produto->PRODUTO_PRECO, 2, ',', '.') }}</td>
                        <td>
                            <div class="qtd">
                                <span>{{$item->ITEM_QTD}}</span>
                            </div>
                        </td>
                        <td>R$ {{ number_format($itemTotal, 2, ',', '.') }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $item->PRODUTO_ID) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover este item?');">
                                @csrf
                                @method('DELETE')
                                <button class="delete" type="submit"><i class='bx bx-x'></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
   
        <aside>
            <div class="box">
                <header>Resumo</header>
                <div class="total"><span>Total do carrinho</span><br>R$ {{ number_format($total, 2, ',', '.') }}</div>
                <div class="info">
                    <div class="sub"><span>Á Vista com -15%</span></div>
                    <div class="sub"><span>R$ {{ number_format($total * $desconto, 2, ',', '.') }}</span></div>
                    <div class="pag"><span>No Pix</span></div>
                </div>
                <div class="button">
                    <button class="purchase-button"><img src="/image/carrinho/carrinho2.png">Finalizar Pedido</button>
                </div>
                <div>
                
                    <form action="{{ route('cart.clear') }}" method="POST" onsubmit="return confirm('Tem certeza que deseja limpar o carrinho?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button-cleanmarket">Limpar Carrinho</button>
                    </form>
                </div>
            </div>
            
        </aside>
    </div>
   <!-- Modal -->
<div class="modal fade" id="modal-finalizar-pedido" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pedido realizado com sucesso!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="modal-text">Sua compra foi realizada com sucesso! Em breve você receberá um e-mail com as informações do pedido.</p>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
        </div>
      </div>
    </div>
  </div>
</main>
    <div class="container containerJogos-home">
    <div class="row" id="jogosContainer">
        <div class="txtContainer-jogo">
            <h2>Aproveite e Compre</h2>
            <button class="btn-jogo-home">
                <a href="/jogos" class="btn-jogo-home-link">Ver Mais</a>
            </button>
        </div>
        @php
        $produtosNoCarrinho = $carrinho->pluck('produto.PRODUTO_ID')->toArray();
        $todosProdutos = \App\Models\Produto::all();
        $produtosParaExibir = $todosProdutos->whereNotIn('PRODUTO_ID', $produtosNoCarrinho);
        @endphp
        @foreach ($produtosParaExibir->random(6) as $produto)
        <div class="col-md-2 jogo">
            <a href="/jogo/{{$produto->PRODUTO_ID}}" class="card-link">
                <div class="card">
                    @if ($produto->IMAGEM->count() > 0)
                    <img src="{{ $produto->IMAGEM[0]->IMAGEM_URL }}" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                    @else
                    <img src="/image/nav/subImg.png" class="card-img-top" alt="Imagem Padrão" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto->PRODUTO_NOME ? $produto->PRODUTO_NOME : 'Produto não identificado' }}</h5>
                        <p class="card-text-price">
                            @if ($produto->PRODUTO_PRECO == 0.00 || $produto->PRODUTO_PRECO == "00.00")
                            Gratuito
                            @else
                            R$ {{ number_format($produto->PRODUTO_PRECO, 2, ',', '.') }}
                            @endif
                        </p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

  
  
<script>
    document.addEventListener("DOMContentLoaded", function() {
      const buttonFinalizarPedido = document.querySelector(".purchase-button");
      buttonFinalizarPedido.addEventListener("click", function() {
        const modal = new bootstrap.Modal(document.getElementById("modal-finalizar-pedido"));
        modal.show();
      });
    });
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection