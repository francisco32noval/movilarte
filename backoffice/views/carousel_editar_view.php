<?php


$form = isset($_GET["id"]);

if($form){

    $id = $_GET["id"];
    $ce = getCarouselEspecifico($id);
    $form = isset($_GET["img_carousel"]);

    if($form){
        $img_carousel = $_GET["img_carousel"];

        iduSQL("UPDATE carousel SET img_carousel='$img_carousel' WHERE id = '$id'");

        header("Location: carousel.php");
    }


}



?>

    



    <!-- <main class="container">

        <div class="row">
            <h1 class="text-center col-12">
                Carousel - Editar
            </h1>
        </div>

        <div class="row mt-5">

            <form class="col-12">
                <input type="hidden" name="id" value="<?= $id; ?>">

                <br>

                <label for="img_carousel">Imagem</label>
                <input type="text" name="img_carousel" required class="w-50" value="<?= $ce["img_carousel"] ?>">
                <br><br>

                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/richfilemanager/connectors/php/filemanager.php">
                    Gestor de Ficheiros
                </a>


                <br><br>

                <input type="submit" value="Editar">
            </form>

        </div>

    </main> -->






    <!-- Div onde o RichFilemanager será carregado -->
    <div id="richfilemanager"></div>

    <!-- Script do RichFilemanager -->
    <script src="backoffice/richfilemanager/dist/richfilemanager.min.js"></script>
    <script>
        $(function () {
            $('#richfilemanager').richFilemanager({
                // URL do conector PHP configurado
                apiConnectorUrl: 'backoffice/richfilemanager/connectors/php/filemanager.php'
            });
        });
    </script>

    <!-- Conteúdo principal da página -->
    <main class="container">
        <div class="row">
            <h1 class="text-center col-12">Carousel - Editar</h1>
        </div>

        <div class="row mt-5">
            <form class="col-12">
                <!-- Campo oculto para o ID -->
                <input type="hidden" name="id" value="<?= htmlspecialchars($id); ?>">

                <br>

                <label for="img_carousel">Imagem</label>
                <input type="text" name="img_carousel" required class="w-50" value="<?= htmlspecialchars($ce["img_carousel"]); ?>">
                <br><br>

                <!-- O link para abrir o gestor de ficheiros foi removido porque ele já está embutido na página -->

                <br><br>

                <input type="submit" value="Editar">
            </form>
        </div>
    </main>

