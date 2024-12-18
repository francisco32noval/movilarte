let modal = document.getElementById("modal");
let idParaExcluir = null;

// Função para abrir o modal e salvar o ID
function remover(id) {
    idParaExcluir = id;
    modal.style.display = "block";
    document.body.classList.add("modal-open");
}

// Fecha o modal
function fecharModal() {
    modal.style.display = "none";
    document.body.classList.remove("modal-open"); 
}

// Confirma a exclusão e redireciona para o PHP
document.getElementById("confirmar").addEventListener("click", () => {
    if (idParaExcluir) {
        window.location.href = `carousel_apagar.php?id=${idParaExcluir}`;
    }
});

