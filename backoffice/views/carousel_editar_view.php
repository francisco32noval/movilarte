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

    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>


    <main class="container">

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

                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php">
                    Gestor de Ficheiros
                </a>


                <br><br>

                <input type="submit" value="Editar">
            </form>

        </div>

    </main>