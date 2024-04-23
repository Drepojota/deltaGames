
    @extends('layouts.main')
    @section('title', 'Carrinho de compras')
    
    
    @section('content')

    <main>
        <div class="page-title">Seu Carrinho</div>
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
                        <tr>
                            <td>
                                <div class="produto">
                                    <img src="image/carrinho/valorant-riot-games.webp" alt="">
                                    <div class="info">
                                        <div class="name">Nome</div>
                                        <div class="desc">Desc</div>
                                    </div>
                                </div>
                            </td>
                            <td>R$ 350,00</td>
                            <td>
                                <div class="qtd">
                                    <button><i class='bx bx-minus' ></i></button>
                                    <span>2</span>
                                    <button><i class='bx bx-plus' ></i></button>
                                </div>
                            </td>
                            <td>R$ 700,00</td>
                            <td>
                                <button class="delete"><i class='bx bx-x'></i></button>
                            </td>
                    </tbody>
                </table>
            </section>
            <aside>
                <div class="box">
                    <header>Resumo</header>
                    <div class="total"><span>Total</span>R$ 700,00</div>
                    <div class="info">
                        <div class="sub"><span>Á Vista</span></div>
                        <div class="sub"><span>R$ 650,00</span></div>
                        <div class="pag"><span>No Pix</span></div>
                    </div>
                    <div class="button">
                        <button><img src="image/nav/carrinho.png">Finalizar Pedido</button>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
@endsection