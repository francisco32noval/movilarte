<?php

$salas = getSalas();



?>


    <main class="container-fluid">
        <div class="row">
            <h1 class="col text-center">Salas</h1>
        </div>

        <div class="text-center novo_carousel">
            <button class="estilo_botao"><a href="carousel_novo.php">Adicionar Nova Sala</a></button>
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


                    <?php foreach($salas as $s): ?>

                        <tr>

                            <td>
                                <img class="w-50" src="<?= $s["imagem"]; ?>" alt="<?= $s["id"]; ?>">
                            </td>

                            <td>
                                <img class="w-50" src="<?= $s["especifica_1"]; ?>" alt="<?= $s["id"]; ?>">
                            </td>

                            <td>
                                <img class="w-50" src="<?= $s["especifica_2"]; ?>" alt="<?= $s["id"]; ?>">
                            </td>

                            <td>
                                <img class="w-50" src="<?= $s["especifica_3"]; ?>" alt="<?= $s["id"]; ?>">
                            </td>

                            <td>
                                <?= $s["descricao"]; ?>
                            </td>



                            <td>
                                <button class="my-4 estilo_botao"><a href="salas_editar.php?id=<?= $s["id"]; ?>">Editar</a></button>
                                <button onclick="remover(<?= $c['id']; ?>)" class="estilo_botao">Apagar</button>
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