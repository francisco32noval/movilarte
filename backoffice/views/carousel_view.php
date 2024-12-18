<?php

$carousel = getCarousel();



?>


    <main class="container-fluid">
        <div class="row">
            <h1 class="col text-center">Carousel</h1>
        </div>

        <div class="text-center novo_carousel">
            <button class="estilo_botao"><a href="carousel_novo.php">Adicionar Imagem a Carousel</a></button>
        </div>


        <div class="row">
            <div class="col">
                <table>

                    <tr>
                        <th>Imagem</th>
                        <th>Ações</th>
                    </tr>


                    <?php foreach($carousel as $c): ?>

                        <tr>

                            <td>
                                <img class="w-50" src="<?= $c["img_carousel"]; ?>" alt="<?= $c["id"]; ?>">
                            </td>

                            <td>
                                <button class="my-4 estilo_botao"><a href="carousel_editar.php?id=<?= $c["id"]; ?>">Editar</a></button>
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