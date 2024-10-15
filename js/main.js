document.addEventListener('DOMContentLoaded', function () {
    // Selecione o elemento pai do dropdown
    var dropdown = document.querySelector('.dropdown');
    var dropdownMenu = document.querySelector('.dropdown-menu');
  
    // Quando o mouse passar sobre o dropdown
    dropdown.addEventListener('mouseover', function() {
        dropdownMenu.classList.add('show');
    });
  
    // Quando o mouse sair do dropdown
    dropdown.addEventListener('mouseout', function() {
        dropdownMenu.classList.remove('show');
    });
});




// Função para verificar se o elemento está parcialmente visível
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top < window.innerHeight && 
        rect.bottom >= 0
    );
}

// Função que será chamada no scroll
function handleScroll() {
    const element = document.querySelector('.slide_in');
    if (isElementInViewport(element)) {
        element.classList.add('visible'); // Adiciona a classe quando o elemento está visível
    }
    else {
        element.classList.remove('visible');  // Remove a classe quando o elemento sai do viewport
    }
}


// Adiciona o evento de scroll
window.addEventListener('scroll', handleScroll);



function getFadeIn(){
    const fade = document.querySelector('.fade_in')
    if (isElementInViewport(fade)) {
        fade.classList.add('get');
    }
    else{
        fade.classList.remove('get');
    }
}

window.addEventListener('scroll', getFadeIn)





// Main ARTIGOS LOJA
// Obtém os elementos
var modal = document.getElementById("modal");
var imagemAmpliada = document.getElementById("imagemAmpliada");
var close = document.getElementsByClassName("close")[0];

// Obtém todas as miniaturas
var imagensMiniatura = document.getElementsByClassName("imagemMiniatura");

// Itera sobre todas as miniaturas e adiciona o comportamento de clique
for (var i = 0; i < imagensMiniatura.length; i++) {
    imagensMiniatura[i].onclick = function() {
        modal.style.display = "flex";
        modal.style.flexDirection = "column" 
        imagemAmpliada.src = this.src;
    }
}

// Quando o utilizador clica no 'X', o modal é fechado
close.onclick = function() {
    modal.style.display = "none";
}

// Fechar o modal ao clicar fora da imagem
modal.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}