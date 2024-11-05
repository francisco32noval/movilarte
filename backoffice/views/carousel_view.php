<?php

$carousel = getCarousel();

?>


    <main class="container">
        <div class="row">
            <h1 class="col text-center">Carousel</h1>
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
                                <button><a href="carousel_editar.php?id=<?= $c["id"]; ?>">Editar</a></button>
                                <button><a href="carousel_apagar.php?id=<?= $c["id"]; ?>">Apagar</a></button>
                            </td>
                        </tr>

                    <?php endforeach; ?>


                </table>
            </div>
        </div>
    </main>