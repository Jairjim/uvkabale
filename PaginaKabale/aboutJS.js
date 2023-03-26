$(".fab").on('click', function() {
    $(this).parent(".card-fundadoras").toggleClass("is-expandend");
})

function eliminarClase() {
    var element = document.getElementById('second');
    element.classList.remove('is-expandend');
    var element2 = document.getElementById('third');
    element2.classList.remove('is-expandend');
}

function eliminarClase2() {
    var element3 = document.getElementById('first');
    element3.classList.remove('is-expandend');
    var element4 = document.getElementById('third');
    element4.classList.remove('is-expandend');
}

function eliminarClase3() {
    var element5 = document.getElementById('first');
    element5.classList.remove('is-expandend');
    var element6 = document.getElementById('second');
    element6.classList.remove('is-expandend');
}