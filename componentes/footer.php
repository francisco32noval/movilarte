    <footer class="container-fluid px-0">


            
        <!-- CONTACTOS -->

        <div class="row mt-5 mx-0 contactos back_image">

            <div class="col-12 px-0">

                <div class="row mx-0 px-0">

                    <div class="col-12 mx-0 px-0 fs-2 pt-5 text-center">
                        Contactos
                    </div>

                </div>

                <div class="row my-5 mx-0 pt-3 px-0 d-flex flex-column flex-lg-row">

                    <div class="col text-center mx-0 px-0 pb-2">

                        <div class="pb-3"><img class="icon" src="uploads/phone.png" alt="phone"></div>

                        <div>
                            <?= $contactos["telefone"]; ?>
                        </div>

                    </div>
        
                    <div class="col text-center mx-0 px-0 pb-2">

                        <div class="pb-3"><img class="icon" src="uploads/location-2.png" alt="local"></div>

                        <div>
                            <?= $contactos["morada"]; ?>
                        </div>

                    </div>

                    <div class="col text-center mx-0 px-0">

                        <div class="pb-3"><img class="icon" src="uploads/mail.png" alt="local"></div>

                        <div>
                            <a class="decoration_link" href="mailto:geral@movilarte.pt"><?= $contactos["email"]; ?></a>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Localização -->

        <div class="row my-2 mx-0 px-0">

            <div class="col-12 px-0 mx-0 text-center">

                <iframe class="w-100" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=N207%201542,%20Travass%C3%B3s,%20Portugal%20Fafe+(Movilarte)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://maps-generator.com/pt'>Integrar o Google Maps</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=d8730348f02bc024ddd3ccebae0dc47910d38fd7'></script>

            </div>

        </div>




        <!-- FACEBOOK -->
        <div class="row px-0 mx-0 facebook back_image">

            <div class="col-12 px-0 mx-0">

                <div class="row px-0 mx-0 mt-5">

                    <div class="col-12 mx-0 px-0"></div>

                        <div class="pb-3 text-center">
                            <a href="<?= $contactos["link_facebook"]; ?>" target="_blank"><img class="fb_icon" src="uploads/facebook.png" alt="facebook"></a>
                        </div>

                        <div class="text-center fs-4">
                            <a class="decoration_link" href="<?= $contactos["link_facebook"]; ?>" target="_blank">Siga-nos no Facebook</a>
                        </div>

                    </div>

                </div>


                <div class="row px-0 mx-0 d-none d-lg-block">
                    <hr id="hr_footer" class="col-12 px-0 mx-0 my-0">
                </div>



                <div class="row px-0 mx-0 d-none d-lg-block">

                    <div class="col-12 px-0 mx-0 my-0">

                        <div class="text-center nav_footer">
                            <a href="#" class="upper text-white px-3">home</a>
                            <a href="#" class="upper text-white px-3">artigos loja</a>
                            <a href="#" class="upper text-white px-3">pedidos por medida</a>
                            <a href="#" class="upper text-white px-3">contactos</a>
                        </div>

                    </div>

                </div>


            </div>
            
            

        </div>

    </footer>
</body>
</html>