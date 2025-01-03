<?php


$form = isset($_GET["imagem"]) && isset($_GET["descricao"]);

if($form){
    $imagem = $_GET["imagem"];
    $descricao = $_GET["descricao"];

    iduSQL("INSERT into decoracao
        (imagem, descricao)
        value ('$imagem', '$descricao')
    ");

    header("Location: decoracao.php");
}



?>

    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>


    <main class="container">

        <div class="row">
            <h1 class="text-center col-12 mt-5">
                Decoração - Novo
            </h1>
        </div>

        <div class="row mt-5 text-center">

            <form class="col-12">

                <br>

                <!-- IMAGEM PRINCIPAL -->
                <label for="imagem">Imagem Principal</label>
                <br>
                <input class="estilo_botao" type="text" name="imagem" id="imagem" required style="width: 50%;" value="http://localhost/movilarte/fotos/decoracao/">
                <br><br>
                <a class="estilo_botao" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php">
                    Gestor de Ficheiros
                </a>


                <hr>
                <!-- Descricao -->
                <label for="descricao" class="fw-bold">Descrição:</label><br>
                <textarea name="descricao" id="descricao" cols="120" rows="5" placeholder="Insere uma descrição para o sofá"></textarea>
                


                <br><br>

                <input class="estilo_botao" type="submit" value="Adicionar">
            </form>

        </div>

    </main>