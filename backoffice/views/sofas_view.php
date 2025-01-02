<?php

$sofas = getSofas()

?>


<main class="container-fluid">
        <div class="row">
            <h1 class="col text-center">Sofás</h1>
        </div>

        <div class="text-center novo_carousel">
            <button class="estilo_botao"><a href="sofas_novo.php">Adicionar Novo Sofá</a></button>
        </div>


        <div class="row">
            <div class="col">
                <table>

                    <tr>
                        <th>Imagem Principal</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>


                    <?php foreach($sofas as $s): ?>

                        <tr>

                            <td>
                                <img class="w-50" src="<?= $s["imagem"]; ?>" alt="<?= $s["id"]; ?>">
                            </td>

                            <td class="px-3">
                                <?= $s["descricao"]; ?>
                            </td>



                            <td>
                                <button class="my-4 estilo_botao"><a href="sofas_editar.php?id=<?= $s["id"]; ?>">Editar</a></button>
                                <button onclick="remover(<?= $s['id']; ?>, 'sofas_apagar.php')" class="estilo_botao">Apagar</button>
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