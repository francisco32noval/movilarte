<?php

$moveisTv = getMoveisTv()

?>


<main class="container-fluid">
        <div class="row">
            <h1 class="col text-center">Móveis Tv</h1>
        </div>

        <div class="text-center novo_carousel">
            <button class="estilo_botao"><a href="moveisTv_novo.php">Adicionar Novo Móvel Tv</a></button>
        </div>


        <div class="row">
            <div class="col">
                <table>

                    <tr>
                        <th>Imagem Principal</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>


                    <?php foreach($moveisTv as $m): ?>

                        <tr>

                            <td>
                                <img class="w-50" src="<?= $m["imagem"]; ?>" alt="<?= $m["id"]; ?>">
                            </td>

                            <td class="px-3">
                                <?= $m["descricao"]; ?>
                            </td>



                            <td>
                                <button class="my-4 estilo_botao"><a href="moveisTv_editar.php?id=<?= $m["id"]; ?>">Editar</a></button>
                                <button onclick="remover(<?= $m['id']; ?>, 'moveisTv_apagar.php')" class="estilo_botao">Apagar</button>
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