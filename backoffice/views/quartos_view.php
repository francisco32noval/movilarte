<?php

$quartos = getQuartos();



?>


    <main class="container-fluid">
        <div class="row">
            <h1 class="col text-center">Quartos</h1>
        </div>

        <div class="text-center novo_carousel">
            <button class="estilo_botao"><a href="quartos_adicionar.php">Adicionar Novo Quarto</a></button>
        </div>


        <div class="row">
            <div class="col">
                <table>

                    <tr>
                        <th>Imagem Principal</th>
                        <th>Imagem Sec. 1</th>
                        <th>Imagem Sec. 2</th>
                        <th>Imagem Sec. 3</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>


                    <?php foreach($quartos as $q): ?>

                        <tr>

                            <td>
                                <img class="w-50" src="<?= $q["imagem"]; ?>" alt="<?= $q["id"]; ?>">
                            </td>

                            <td>
                                <img class="w-50" src="<?= $q["especifica_1"]; ?>" alt="<?= $q["id"]; ?>">
                            </td>

                            <td>
                                <img class="w-50" src="<?= $q["especifica_2"]; ?>" alt="<?= $q["id"]; ?>">
                            </td>

                            <td>
                                <img class="w-50" src="<?= $q["especifica_3"]; ?>" alt="<?= $q["id"]; ?>">
                            </td>

                            <td>
                                <?= $q["descricao"]; ?>
                            </td>



                            <td>
                                <button class="my-4 estilo_botao"><a href="quartos_editar.php?id=<?= $q["id"]; ?>">Editar</a></button>
                                <button onclick="remover(<?= $q['id']; ?>, 'quartos_apagar.php')" class="estilo_botao">Apagar</button>
                                <div id="modal" class="modal">  
                                    <div class="modal-content">
                                        <p>Tem certeza que deseja apagar este item?</p>
                                        <button id="confirmar" class="confirmar estilo_botao">Sim</button>
                                        <button onclick="fecharModal()" class="cancelar estilo_botao">Cancelar</button>
                                    </div>
                                </div>
                            </td>

                        </tr>

                    <?php endforeach; ?>


                </table>
            </div>
        </div>
    </main>