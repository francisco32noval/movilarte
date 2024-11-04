<?php

$quem_somos = getHome();

?>
    

    <main class="container my-5">

        <div class="row">

            <div class="col">
                <hr class="hr_main">
            </div>

        </div>


        <div class="row quem_somos p-5 rounded-4 my-5">
            <h5 class="col-12 col-lg-3 upper d-flex justify-content-center align-items-center">quem somos</h5>

            <div class="col-12 col-lg-9">
                <?= $quem_somos["quem_somos"]; ?>
            </div>
        </div>


        <div class="row text-center slide_in my-5">

            <h2 class="col-12 upper">artigos em loja</h2>

        </div>
        

        <div class="row fade_in column-gap-3 d-flex justify-content-center">

            <div class="col-8 col-sm-5 col-lg-3 my-2 artigos_height back_image px-0 salas" id="salas">
                <div class="effect">
                    <a class="pointer fs-3 pt-5" href="salas.php">Salas</a>
                </div>
            </div>

            <div class="col-8 col-sm-5 col-lg-3 my-2 artigos_height back_image px-0 sofas">
                <div class="effect">
                    <a class="pointer fs-3 pt-5" href="sofas.php">Sofás</a>
                </div>
            </div>

            <div class="col-8 col-sm-5 col-lg-3 my-2 artigos_height back_image px-0 decoracao">
                <div class="effect">
                    <a class="pointer fs-3 pt-5" href="decoracoes.php">Decoração</a>
                </div>
            </div>

            <div class="col-8 col-sm-5 col-lg-3 my-2 artigos_height back_image px-0 quartos">
                <div class="effect">
                    <a class="pointer fs-3 pt-5" href="quartos.php">Quartos</a>
                </div>
            </div>

            <div class="col-8 col-sm-5 col-lg-3 my-2 artigos_height back_image px-0 diversos">
                <div class="effect">
                    <a class="pointer fs-3 pt-5" href="diversos.php">Diversos</a>
                </div>
            </div>

            <div class="col-8 col-sm-5 col-lg-3 my-2 artigos_height back_image px-0 moveis_tv">
                <div class="effect">
                    <a class="pointer fs-3 pt-5" href="moveis_tv.php">Móveis de Tv</a>
                </div>
            </div>
            
        </div>
        

    </main>
