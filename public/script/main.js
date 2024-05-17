var menuItem = document.querySelectorAll('.item-menu');

function selectLink(){
    menuItem.forEach((item)=>
        item.classList.remove('ativo')
    )
    this.classList.add('ativo')
}

menuItem.forEach((item)=>
    item.addEventListener('click', selectLink)
);

document.addEventListener('DOMContentLoaded', function() {
    const navMenu = document.querySelector('.nav-menu');
    const body = document.querySelector('body');
    const menuItem = document.querySelectorAll('.item-menu');

    function selectLink(event) {
        event.stopPropagation();
        menuItem.forEach((item) =>
            item.classList.remove('ativo')
        )
        this.classList.add('ativo')
    }

    menuItem.forEach((item) =>
        item.addEventListener('click', selectLink)
    );

    navMenu.addEventListener('click', function(event) {
        event.stopPropagation();
        this.classList.toggle('expandir');
    });

    document.addEventListener('click', function(event) {
        if (!event.target.closest('.nav-menu')) {
            if (navMenu.classList.contains('expandir')) {
                navMenu.classList.remove('expandir');
            }
        }
    });
});

//filtro
function ordenarJogos(tipoOrdenacao, nomeFiltro) {
    document.getElementById('meuDropdown').innerText = nomeFiltro;
    var jogos = $(".jogo");
    if (tipoOrdenacao === 'AZ') {
        jogos.sort(function(a, b) {
            return $(a).find(".card-title").text().localeCompare($(b).find(".card-title").text());
        });
    } else if (tipoOrdenacao === 'ZA') {
        jogos.sort(function(a, b) {
            return $(b).find(".card-title").text().localeCompare($(a).find(".card-title").text());
        });
    } else if (tipoOrdenacao === 'menorPreco') {
        jogos.sort(function(a, b) {
            var precoA = parseFloat($(a).find(".card-text-price").text().replace('R$', '').trim().replace(',', '.'));
            var precoB = parseFloat($(b).find(".card-text-price").text().replace('R$', '').trim().replace(',', '.'));
            return precoA - precoB;
        });
    } else if (tipoOrdenacao === 'maiorPreco') {
        jogos.sort(function(a, b) {
            var precoA = parseFloat($(a).find(".card-text-price").text().replace('R$', '').trim().replace(',', '.'));
            var precoB = parseFloat($(b).find(".card-text-price").text().replace('R$', '').trim().replace(',', '.'));
            return precoB - precoA;
        });
    }
    $("#jogosContainer").html(jogos);
}
