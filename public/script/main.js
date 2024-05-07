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



