<?php

$decoracao = getDecoracao()

?>


<main class="container-fluid">
        <div class="row">
            <h1 class="col text-center">Decoração</h1>
        </div>

        <div class="text-center novo_carousel">
            <button class="estilo_botao"><a href="decoracao_novo.php">Adicionar Nova Decoração</a></button>
        </div>


        <div class="row">
            <div class="col">
                <table>

                    <tr>
                        <th>Imagem Principal</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>


                    <?php foreach($decoracao as $d): ?>

                        <tr>

                            <td>
                                <img class="w-50" src="<?= $d["imagem"]; ?>" alt="<?= $d["id"]; ?>">
                            </td>

                            <td class="px-3">
                                <?= $d["descricao"]; ?>
                            </td>



                            <td>
                                <button class="my-4 estilo_botao"><a href="decoracao_editar.php?id=<?= $d["id"]; ?>">Editar</a></button>
                                <button onclick="remover(<?= $d['id']; ?>, 'decoracao_apagar.php')" class="estilo_botao">Apagar</button>
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