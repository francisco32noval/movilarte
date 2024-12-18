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

    

    <main class="container">

        <div class="row">
            <h1 class="text-center col-12 mt-5">
                Carousel - Editar
            </h1>
        </div>

        <div class="row mt-5 text-center">

            <form class="col-12">
                <input type="hidden" name="id" value="<?= $id; ?>">

                <br>

                <label for="img_carousel">Imagem</label>
                <input class="estilo_botao" type="text" name="img_carousel" id="img_carousel" required style="width: 50%;" value="<?= $ce["img_carousel"]; ?>">
                <br>
                <img class="imgAEditar" src="<?= $ce["img_carousel"]; ?>" alt="<?= $ce["id"]; ?>">
                <br>
                <a class="estilo_botao" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php">
                    Gestor de Ficheiros
                </a>
                <br><br>

                


                <br><br>

                <input class="estilo_botao" type="submit" value="Editar">
            </form>

        </div>

    </main>






