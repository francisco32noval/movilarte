<?php


$form = isset($_GET["id"]);

if($form){

    $id = intval($_GET["id"]);
    $quartoE = getQuartoEspecifico($id);
    $form = isset($_GET["imagem"]) && isset($_GET["especifica_1"]) && isset($_GET["especifica_2"]) && isset($_GET["especifica_3"]) && isset($_GET["descricao"]);

    if($form){
        $imagem = $_GET["imagem"];
        $especifica_1 = $_GET["especifica_1"];
        $especifica_2 = $_GET["especifica_2"];
        $especifica_3 = $_GET["especifica_3"];
        $descricao = $_GET["descricao"];

        iduSQL("UPDATE quartos SET 
            imagem='$imagem', 
            especifica_1='$especifica_1', 
            especifica_2='$especifica_2',
            especifica_3='$especifica_3',
            descricao='$descricao'
            WHERE id = '$id'
            ");

        header("Location: quartos.php");
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
                Quartos - Editar
            </h1>
        </div>

        <div class="row mt-5 text-center">

            <form class="col-12">
                <input type="hidden" name="id" value="<?= $id; ?>">

                <br>

                <!-- IMAGEM PRINCIPAL -->
                <label for="imagem">Imagem Principal</label>
                <br>
                <input class="estilo_botao" type="text" name="imagem" id="imagem" required style="width: 50%;" value="<?= $quartoE["imagem"]; ?>">
                <br>
                <img id="imagem" class="imgAEditar" src="<?= $quartoE["imagem"]; ?>" alt="<?= $quartoE["id"]; ?>">
                <br>


                <hr>
                <!-- Imagem Secundaria 1 -->
                <label for="especifica_1">Imagem Secundaria 1</label>
                <br>
                <input class="estilo_botao" type="text" name="especifica_1" id="especifica_1" required style="width: 50%;" value="<?= $quartoE["especifica_1"]; ?>">
                <br>
                <img id="especifica_1" class="imgAEditar" src="<?= $quartoE["especifica_1"]; ?>" alt="<?= $quartoE["id"]; ?>">
                <br>


                <hr>
                <!-- Imagem Secundaria 2 -->
                <label for="especifica_2">Imagem Secundaria 2</label>
                <br>
                <input class="estilo_botao" type="text" name="especifica_2" id="especifica_2" required style="width: 50%;" value="<?= $quartoE["especifica_2"]; ?>">
                <br>
                <img id="especifica_3" class="imgAEditar" src="<?= $quartoE["especifica_2"]; ?>" alt="<?= $quartoE["id"]; ?>">
                <br>




                <hr>
                <!-- Imagem Secundaria 3 -->
                <label for="especifica_3">Imagem Secundaria 3</label>
                <br>
                <input class="estilo_botao" type="text" name="especifica_3" id="especifica_3" required style="width: 50%;" value="<?= $quartoE["especifica_3"]; ?>">
                <br>
                <img id="especifica_3" class="imgAEditar" src="<?= $quartoE["especifica_3"]; ?>" alt="<?= $quartoE["id"]; ?>">
                <br>
                <a class="estilo_botao" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php">
                    Gestor de Ficheiros
                </a>
                <br><br>
                



                <hr>
                <!-- Descricao -->
                <label for="descricao" class="fw-bold">Descrição:</label><br>
                <textarea name="descricao" id="descricao" cols="120" rows="5"><?= $quartoE["descricao"]; ?></textarea>
                


                <br><br>

                <input class="estilo_botao" type="submit" value="Editar">
            </form>

        </div>

    </main>