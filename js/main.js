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


// Função para verificar se o elemento está visível
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Função que será chamada no scroll
function handleScroll() {
    const element = document.querySelector('.slide_in');
    if (isElementInViewport(element)) {
        element.classList.add('visible'); // Adiciona a classe visible quando o elemento está no viewport
    }
}

// Adiciona o evento de scroll
window.addEventListener('scroll', handleScroll);