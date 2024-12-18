<?php


$form = isset($_GET["img_carousel"]);

if($form){
    $img_carousel = $_GET["img_carousel"];

    iduSQL("INSERT into carousel (img_carousel) value('$img_carousel')");
    header("Location: carousel.php");

}



?>

    <main class="container">

        <div class="row">
            <h1 class="text-center col-12 mt-5">
                Carousel - Novo
            </h1>
        </div>

        <div class="row mt-5 text-center">

            <form class="col-12">

                <br>

                <label for="img_carousel">Imagem</label>
                <input class="estilo_botao" type="text" name="img_carousel" id="img_carousel" required style="width: 50%;" value="http://localhost/movilarte/">
                <br>
                <a class="estilo_botao" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php">
                    Gestor de Ficheiros
                </a>

                <br><br>

                <input class="estilo_botao" type="submit" value="Editar">
            </form>

        </div>

    </main>