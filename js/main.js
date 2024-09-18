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


