<?php

$home = getHome();

?>



    <main class="container-fluid mt-5">
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <th>Titulo</th>
                        <th>Texto</th>
                        <th>Ações</th>
                    </tr>

                    <tr>
                        <td>Quem Somos</td>
                        <td><?= $home["quem_somos"]; ?></td>
                        <td>
                            <button class="estilo_botao"><a href="home_editar.php">Editar</a></button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>