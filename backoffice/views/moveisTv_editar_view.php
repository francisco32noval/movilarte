<?php


$form = isset($_GET["id"]);

if($form){

    $id = intval($_GET["id"]);
    $movEsp = getMoveisEspecifico($id);
    $form = isset($_GET["imagem"]) && isset($_GET["descricao"]);

    if($form){
        $imagem = $_GET["imagem"];
        $descricao = $_GET["descricao"];

        iduSQL("UPDATE moveis_tv SET 
            imagem='$imagem',
            descricao='$descricao'
            WHERE id = '$id'
            ");

        header("Location: moveisTv.php");
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
            <h1 class="text-center col-12 mt-5">
                Móveis Tv - Editar
            </h1>
        </div>

        <div class="row mt-5 text-center">

            <form class="col-12">
                <input type="hidden" name="id" value="<?= $id; ?>">

                <br>

                <!-- IMAGEM PRINCIPAL -->
                <label for="imagem">Imagem Principal</label>
                <br>
                <input class="estilo_botao" type="text" name="imagem" id="imagem" required style="width: 50%;" value="<?= $movEsp["imagem"]; ?>">
                <br>
                <img id="imagem" class="imgAEditar" src="<?= $movEsp["imagem"]; ?>" alt="<?= $movEsp["id"]; ?>">
                <br>
                



                <hr>
                <!-- Descricao -->
                <label for="descricao" class="fw-bold">Descrição:</label><br>
                <textarea name="descricao" id="descricao" cols="120" rows="5"><?= $movEsp["descricao"]; ?></textarea>
                


                <br><br>

                <input class="estilo_botao" type="submit" value="Editar">
            </form>

        </div>

    </main>