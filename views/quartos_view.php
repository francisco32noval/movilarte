<?php

$quartos = getQuartos();

?>

    <main class="container">

        <div class="row"></div>

            <div class="col my-5">
                <hr class="hr_main">
            </div>

        </div>

        <div class="row text-center slide_in my-5">

            <h2 class="col-12 upper">Quartos</h2>

        </div>
        

        <div class="row d-flex justify-content-center fade_in">

            <?php foreach($quartos as $q): ?>


                <div class="col-12 col-sm-6 col-lg-4 my-2">

                    <img src="<?= $q["imagem"]; ?>" alt="Miniatura 3" class="imagemMiniatura w-100" style="cursor: pointer;">

                    <!-- Modal para exibir a imagem em plano principal -->
                    <div id="modal" class="modal mt-5">
                        <span class="close">&times;</span>
                        

                        <div id="carouselE" class="carousel slide w-75" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="modal-content img_modal" id="imagemAmpliada" src="<?= $q["especifica_1"]; ?>">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= $q["especifica_2"]; ?>" class="d-block img_modal" alt="sala">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= $q["especifica_3"]; ?>" class="d-block img_modal" alt="sala">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselE" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselE" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>


                        <p class="text-white mt-2"><?= $q["descricao"]; ?></p>
                    </div>

                </div>


            <?php endforeach; ?>

        </div>

    </main>
