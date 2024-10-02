<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movilarte</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/const.css">
    <link rel="stylesheet" href="css/media.css">

    <!-- JAVASCRIPT -->
    <script src="js/main.js" defer></script>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
    </style>

</head>
<body>

    <header class="container-fluid my-3">

        <div class="row nav">

            <div class="col-4 text-end pe-5 pt-3">
                <img src="uploads/logo movilarte.png" alt="logo" class="w-50 logo">
            </div>

            <div class="col-8">

                <nav class="navbar navbar-expand-lg">

                    <div class="container-fluid">

                        <button class="navbar-toggler m-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                <li class="nav-item">
                                    <a class="nav-link active upper pointer font_nav" id="home" href="index.html">Home</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link upper pointer font_nav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        artigos loja
                                    </a>
                                    <ul role="menu" class="dropdown-menu text-center">
                                        <li><a class="dropdown-item upper pointer" href="salas.php">salas</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item upper pointer" href="sofas.php">sofás</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item upper pointer" href="decoracao.php">decoração</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item upper pointer" href="moveis_tv.php">moveis de tv</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item upper pointer" href="diversos.php">diversos</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item upper pointer" href="quartos.php">quartos</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper pointer font_nav" href="#">produtos por medida</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper pointer font_nav" href="contactos.php">contactos</a>
                                </li>

                            </ul>

                        </div>
                    </div>

                </nav>

            </div>

        </div>


        <div class="row mt-2">

            <div class="col-12 px-0 mt-3">

                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="uploads/capa.jpg" class="d-block w-100" alt="capa">
                        </div>

                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="uploads/capa1.jpg" class="d-block w-100" alt="capa1">
                        </div>

                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="uploads/capa2.png" class="d-block w-100" alt="capa2">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </header>