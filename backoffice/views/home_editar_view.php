<?php

$home = getHome();

$form = isset($_GET["quem_somos"]);
if($form){
    $quem_somos = $_GET["quem_somos"];
    iduSQL("UPDATE home SET quem_somos='$quem_somos'");
    header("Location: home.php");
}

?>

    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>

    <main class="container-fluid my-5 text-center">

        <div class="row">
            <div class="col-12">
                <h3>Quem Somos - Editar</h3>
            </div>
        </div>

        <div class="row">
            <form class="col-12">

                <label for="quem_somos" class="fw-bold">Texto:</label><br>
                <textarea name="quem_somos" id="quem_somos" cols="120" rows="20"><?= $home["quem_somos"]; ?></textarea>

                <br><br>

                <input class="editar" type="submit" value="Editar">
                
            </form>
        </div>

    </main>