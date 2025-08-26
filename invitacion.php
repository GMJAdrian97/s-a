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

    <div class="section section-presentacion">
        <img src="/s&a/imgs/img-bienvenidaTransparente.png" alt="">
    </div>

    <!-- --------------------------- Reloj de cuenta regresiva --------------------------- -->
    <!-- <div class="section section-countdown">
        <div class="time">Faltan</div>
        <div class="line"></div>
        <div class="time" id="countdown">00:00:00</div>
        <div class="labels">
            <span>Días </span>
            <span>Horas</span>
            <span>Minutos</span>
            <span>Segundos</span>
        </div>
        <div class="line"></div>
    </div> -->

    <div class="card card-reloj">
        <div class="section section-countdown">
            <div class="time">Faltan</div>
            <div class="line"></div>
            <div class="time" id="countdown">00:00:00</div>
            <div class="labels">
                <span>Días </span>
                <span>Horas</span>
                <span>Minutos</span>
                <span>Segundos</span>
            </div>
            <div class="line"></div>
        </div>
    </div>


    <div class="section section-recepcion">
        <!-- Carta -->
        <div class="card Card-carta">
            <h2>Nuestro amor está hecho de pequeños instantes que se volvieron eternos, y ustedes forman parte de esta
                hermosa historia.
                Hoy, con ilusión y gratitud, los invitamos a ser testigos de un nuevo comienzo, donde celebramos lo que
                nació como un sueño y hoy florece como nuestra vida juntos.</h2>
        </div>
        <div class="col-4"><img src="/s&a/imgs/iconoIglesia.png" class="img-icons" alt=""></div>
        <!-- Ceremonia -->
        <div class="card card-ceremonia" id="Ceremonia">
            <img class="img-cards" src="/s&a/imgs/iglesia.png" alt="">
            <p><strong>Hora:</strong> 01:00 PM. hrs</p>
            <p><strong>Lugar:</strong> Parroquia Santo Ecce Homo , Acámbaro, Gto</p>
            <button class="btn btn--block card__btn" onclick="window.location.href='/s&a/index.php/'">Ubicacion</button>
            <div id="IdModal" class="modal">
                <p>Esto es un una ventana modal.</p>
                <a href="#" rel="modal:close"></a>
            </div>
            <a class="link-interrogacion" href="#IdModal" rel="modal:open"><img class="img-interrogacion" src="/s&a/imgs/interrogacion.png"/></a>
        </div>


       <!--  <div class="card card-ceremonia" id="Ceremonia">
            <img class="img-cards" src="/s&a/imgs/iglesia.png" alt="">
            <p><strong>Hora:</strong> 01:00 PM. hrs</p>
            <p><strong>Lugar:</strong> Parroquia Santo Ecce Homo , Acámbaro, Gto</p>
            <button class="btn btn--block card__btn" onclick="window.location.href='/s&a/index.php/'">Ubicacion</button>
            <div id="IdModal" class="modal">
                <p>Esto es un una ventana modal.</p>
                <a href="#" rel="modal:close">Cerrar</a>
            </div>
            <a class="link-interrogacion" href="#IdModal" rel="modal:open"><img class="img-interrogacion" src="/s&a/imgs/interrogacion.png"/></a>
        </div>
 -->
        <!-- Recepción -->
        <div class="card">
            <h2>Recepción</h2>
            <p><strong>Hora:</strong> 19:00 hrs</p>
            <p><strong>Lugar:</strong> Salón Real, Acámbaro, Gto</p>
        </div>
    </div>


    <script src="/s&a/js/nav.js">
    < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity = "sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin = "anonymous" >
    </script>
</body>

</html>