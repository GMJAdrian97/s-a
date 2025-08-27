<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S&A</title>
    <link rel="stylesheet" href="/s&a/css/cssPrincipal.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&display=swap"
        rel="stylesheet">
    <!-- jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <!-- jQuery Modal CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="index.html" class="navbar-logo">Nuestra Boda S&A</a>
            <button class="navbar-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <ul class="navbar-menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Recepcion</a></li>
                <li><a href="#Ceremonia">Ceremonia</a></li>
                <li><a href="#">Intinerario</a></li>
                <li><a href="#">Confirmacion de asistencia</a></li>
                <li><a href="#">Alojamiento</a></li>
                <li><a href="#">Galeria</a></li>
            </ul>
        </div>
    </nav>


    <!-- Alojamiento A -->
    <div class="section section-ceremonia">
        <!-- Card Ceremonia -->
        <div class="col-4"><img src="/s&a/imgs/IconHospedaje.png" class="img-icons" alt=""></div>
        <div class="card card-ceremonia" id="Ceremonia">
            <img class="img-cards" src="/s&a/imgs/HotelPosadaVirreydeMendoza.png" alt="">
            <p><strong>Opcion A (Recomendada)</strong></p>
            <p><strong>Hotel Posada Virrey de Mendoza, <br /> Acámbaro, Gto</strong></p>
            <a href="https://share.google/BAfw6tasv7k7OOhnP" target="_blank">
                <button class="btn btn--block card__btn">Mas Informacion</button>
            </a>
            <div id="IdModalA" class="modal">
                <img src="/s&a/imgs/IconHospedaje.png" class="img-icons" alt="">
                <p><strong>Hotel Posada Virrey de Mendoza</strong> <br /><Br />(Recomendacion) <br />Ubicado en pleno corazón de Acámbaro y
                    muy
                    cerca del templo donde se celebrará nuestra boda, este hotel es una opción ideal para disfrutar de
                    la fiesta sin prisas. Rodeado de comercios y espacios para pasear, ofrece estacionamiento y
                    restaurante, asegurando comodidad durante su estancia.</p><br />
                <p> Con Cariño S&A. </p>
                <a href="#" rel="modal:close"></a>
            </div>
            <a class="link-interrogacion" href="#IdModalA" rel="modal:open"><img class="img-interrogacion"
                    src="/s&a/imgs/interrogacion.png" /></a>
        </div>

        <!-- Alojamiento B-->
        <div class="section section-ceremonia">
            <!-- Card Ceremonia -->
            <div class="card card-ceremonia" id="Ceremonia">
                <img class="img-cards" src="/s&a/imgs/mesonpuente.jpg" alt="">
                <p><strong>Opcion B</strong></p>
                <p><strong>Hotel Meson del puente, <br /> Acámbaro, Gto</strong></p>
                <a href="https://share.google/YORXkhFwhanEcTQsF" target="_blank">
                    <button class="btn btn--block card__btn">Mas Informacion</button>
                </a>
                <div id="IdModalB" class="modal">
                    <img src="/s&a/imgs/IconHospedaje.png" class="img-icons" alt="">
                    <p><strong>Hotel Meson del puente</strong><br /><br />
                        Este hotel, aunque está un poco más alejado del centro y del templo, ofrece una experiencia más
                        completa y confortable. Cuenta con restaurante, bar, piscina, cancha de pádel y un amplio
                        estacionamiento, lo que lo convierte en una opción ideal para relajarse y disfrutar al máximo
                        antes y después de la boda.</p><br />
                    <p> Con Cariño S&A. </p>
                    <a href="#" rel="modal:close"></a>
                </div>
                <a class="link-interrogacion" href="#IdModalB" rel="modal:open"><img class="img-interrogacion"
                        src="/s&a/imgs/interrogacion.png" /></a>
            </div>

            <!-- Alojamiento c-->
            <div class="section section-ceremonia">
                <!-- Card Ceremonia -->
                <div class="card card-ceremonia" id="Ceremonia">
                    <img class="img-cards" src="/s&a/imgs/Kali.png" alt="">
                    <p><strong>Opcion C</strong></p>
                    <p><strong>Kali Doña Tere Hotel Boutique<br /> Acámbaro, Gto</strong></p>
                    <a href="https://share.google/JDnmPJuTZvSHeYtNe" target="_blank">
                        <button class="btn btn--block card__btn">Mas Informacion</button>
                    </a>
                    <div id="IdModalC" class="modal">
                        <img src="/s&a/imgs/IconHospedaje.png" class="img-icons" alt="">
                        <p><strong>Kali Doña Tere Hotel Boutique</strong><br /><br />
                        <p>Este hotel también se encuentra en una zona céntrica de Acámbaro, no tan lejos del templo
                            donde se celebrará nuestra boda. Aunque su ubicación no es tan vistosa como la primera
                            opción, ofrece la misma comodidad y servicios: restaurante, estacionamiento y cercanía a
                            comercios para disfrutar su estancia con tranquilidad.</p><br />
                        <p> Con Cariño S&A. </p>
                        <a href="#" rel="modal:close"></a>
                    </div>
                    <a class="link-interrogacion" href="#IdModalC" rel="modal:open"><img class="img-interrogacion"
                            src="/s&a/imgs/interrogacion.png" /></a>
                </div>
            </div>
            <div class="card card-ceremonia" id="btnAlo">
                <a href="/s&a/invitacion.php#Hoteles">
                    <button class="btn btn--block card__btn">Regresar</button>
                </a>
            </div>

            <script src="/s&a/js/nav.js">
            < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity = "sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin = "anonymous" >
            </script>

</body>

</html>