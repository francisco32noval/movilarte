let modal = document.getElementById("modal");
let idParaExcluir = null;
let urlParaExcluir = null;

// Função para abrir o modal e salvar o ID
function remover(id, url) {
    idParaExcluir = id;
    urlParaExcluir = url;
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
    if (idParaExcluir, urlParaExcluir) {
        window.location.href = `${urlParaExcluir}?id=${idParaExcluir}`;
    }
});

