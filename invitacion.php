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

    <!-- Ceremonia -->
    <div class="section section-ceremonia">
        <!-- Carta -->
        <div class="card Card-carta">
            <h2>Nuestro amor está hecho de pequeños instantes que se volvieron eternos, y ustedes forman parte de esta
                hermosa historia.
                Hoy, con ilusión y gratitud, los invitamos a ser testigos de un nuevo comienzo, donde celebramos lo que
                nació como un sueño y hoy florece como nuestra vida juntos.</h2>
        </div>
        <!-- Card Ceremonia -->
        <div class="col-4"><img src="/s&a/imgs/iconoIglesia.png" class="img-icons" alt=""></div>
        <div class="card card-ceremonia" id="Ceremonia">
            <img class="img-cards" src="/s&a/imgs/iglesia.png" alt="">
            <p><strong>Hora:</strong> 01:00 PM. hrs</p>
            <p><strong>Lugar:</strong> Parroquia Santo Ecce Homo , Acámbaro, Gto</p>
            <a href="https://maps.app.goo.gl/v6Pvo7XnfDupnSSm6" target="_blank">
                <button class="btn btn--block card__btn">Ubicacion</button>
            </a>
        </div>
    </div>

    <!-- Card Recepción -->
    <div class="section section-recepcion">

        <!-- Card Recepción -->
        <div class="col-4"><img src="/s&a/imgs/iconRecepcion.png" class="img-icons" alt=""></div>
        <div class="card card-ceremonia" id="Ceremonia">
            <img class="img-cards" src="/s&a/imgs/imgRancho1.png" alt="">
            <p><strong>Hora:</strong> 03:00 PM. hrs</p>
            <p><strong>Lugar:</strong> Rancho Martinez, Acámbaro, Gto</p>
            <a href="https://maps.app.goo.gl/pRwgbNgvUrDiNzZ37" target="_blank">
                <button class="btn btn--block card__btn">Ubicacion</button>
            </a>
            <div id="IdModal" class="modal">
                <img src="/s&a/imgs/iconRecepcion.png" class="img-icons" alt="">
                <p>Nos llena de ilusión recibirlos en la Recepción, que se llevará a cabo en el Rancho Martínez.
                    Para su comodidad, el acceso será únicamente a partir de las 3:00 p.m., momento en que con gusto los
                    atenderemos.</p><br />
                <p>Se llevará un control de pases de entrada, por lo que será indispensable presentarlos completos al
                    ingresar.</p><br />
                <p> Con Cariño S&A. </p>
                <a href="#" rel="modal:close"></a>
            </div>
            <a class="link-interrogacion" href="#IdModal" rel="modal:open"><img class="img-interrogacion"
                    src="/s&a/imgs/interrogacion.png" /></a>
        </div>
    </div>


    <!-- Seccion Itinerario -->
    <div class="section section-recepcion">

        <!-- Card Tinerario -->
        <div class="col-4"><img src="/s&a/imgs/IconItinerario.png" class="img-icons" alt=""></div>
        <div class="card card-ceremonia" id="Ceremonia">
            <!-- Contenedor de la línea de tiempo -->
            <div class="sa-timeline">
                <!-- Encabezado-->
                <h1>Scroll up to see magic</h1>

                <!-- Contenedor de la línea de tiempo -->
                <div class="timeline-container">

                    <!-- Lista principal del timeline -->
                    <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">

                        <!-- Barra de progreso vertical -->
                        <div class="list-progress">
                            <div class="inner"></div>
                        </div>

                        <!-- Item 1 -->
                        <li>
                            <h3>Ceremonia</h3>
                            <p>
                                De: 1:00pm. a 2:00pm.
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                                <img src="/s&a/imgs/IglesiaIcon.png" class="img-icons" alt="">
                            </div>
                        </li>

                        <!--  Item 2 /s&a-->
                        <li>
                            <h3>Recepcion</h3>
                            <p>
                                De 3:00pm. a 3:30pm.
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                            <img src="/s&a/imgs/RecepcionIcon.png" class="img-icons" alt="">
                                <!-- <i class="fa-solid fa-circle-info"></i> -->
                            </div>
                        </li>

                        <!--  Item 3 -->
                        <li>
                            <h3>Comida</h3>
                            <p>
                                De 3:30pm. a 5:30pm
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                            <img src="/s&a/imgs/ComidaIcon.png" class="img-icons" alt="">
                            </div>
                        </li>
                        <!--  Item 4 -->
                        <li>
                            <h3>Protocolo</h3>
                            <p>
                                De 6:00pm. a 7:00pm
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                            <img src="/s&a/imgs/ProtocoloIcon.png" class="img-icons" alt="">
                            </div>
                        </li>
                         <!--  Item 5 -->
                         <li>
                            <h3>¡A disfrutar!</h3>
                            <p>
                                De 7:30pm
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                            <img src="/s&a/imgs/FiestaIcon.png" class="img-icons" alt="">
                            </div>
                        </li>
                        <li>
                            <h3>¡Que? Que...?!</h3>
                            <p>
                               La fiesta de acaba... </p> <p> Hasta que el cuerpo aguante.</p><br />
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                            <img src="/s&a/imgs/FinFiestaIcon.png" class="img-icons" alt="">
                            </div>
                        </li>

                    </ul><!-- /.vertical-scrollable-timeline -->
                </div><!-- /.timeline-container -->

            </div>

        </div>

    </div>

    <!-- Seccion Hospedaje -->
    <div class="section section-hospedaje">

        <!-- Card Recepción -->
        <div class="col-4"><img src="/s&a/imgs/IconHostedaje.png" class="img-icons" alt=""></div>
        <div class="card card-ceremonia" id="Ceremonia">
            <img class="img-cards" src="" alt="">
            <p><strong>Hora:</strong> 03:00 PM. hrs</p>
            <p><strong>Lugar:</strong> Rancho Martinez, Acámbaro, Gto</p>
            <a href="https://maps.app.goo.gl/pRwgbNgvUrDiNzZ37" target="_blank">
                <button class="btn btn--block card__btn">Ubicacion</button>
            </a>
            <div id="IdModal" class="modal">
                <img src="/s&a/imgs/iconRecepcion.png" class="img-icons" alt="">
                <p>Nos llena de ilusión recibirlos en la Recepción, que se llevará a cabo en el Rancho Martínez.
                    Para su comodidad, el acceso será únicamente a partir de las 3:00 p.m., momento en que con gusto los
                    atenderemos.</p><br />
                <p>Se llevará un control de pases de entrada, por lo que será indispensable presentarlos completos al
                    ingresar.</p><br />
                <p> Con Cariño S&A. </p>
                <a href="#" rel="modal:close"></a>
            </div>
            <a class="link-interrogacion" href="#IdModal" rel="modal:open"><img class="img-interrogacion"
                    src="/s&a/imgs/interrogacion.png" /></a>
        </div>
    </div>

    <!-- Card Recepción -->
    <div class="section section-recepcion">

        <!-- Card Recepción -->
        <div class="col-4"><img src="/s&a/imgs/iconRecepcion.png" class="img-icons" alt=""></div>
        <div class="card card-ceremonia" id="Ceremonia">
            <img class="img-cards" src="/s&a/imgs/imgRancho1.png" alt="">
            <p><strong>Hora:</strong> 03:00 PM. hrs</p>
            <p><strong>Lugar:</strong> Rancho Martinez, Acámbaro, Gto</p>
            <a href="https://maps.app.goo.gl/pRwgbNgvUrDiNzZ37" target="_blank">
                <button class="btn btn--block card__btn">Ubicacion</button>
            </a>
            <div id="IdModal" class="modal">
                <img src="/s&a/imgs/iconRecepcion.png" class="img-icons" alt="">
                <p>Nos llena de ilusión recibirlos en la Recepción, que se llevará a cabo en el Rancho Martínez.
                    Para su comodidad, el acceso será únicamente a partir de las 3:00 p.m., momento en que con gusto los
                    atenderemos.</p><br />
                <p>Se llevará un control de pases de entrada, por lo que será indispensable presentarlos completos al
                    ingresar.</p><br />
                <p> Con Cariño S&A. </p>
                <a href="#" rel="modal:close"></a>
            </div>
            <a class="link-interrogacion" href="#IdModal" rel="modal:open"><img class="img-interrogacion"
                    src="/s&a/imgs/interrogacion.png" /></a>
        </div>
    </div>


    <script src="/s&a/js/nav.js">
    < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity = "sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin = "anonymous" >
    </script>
    <script>
    (function() {
        var $win = $(window);
        var $containers = $(".sa-timeline"); // 👈 sólo dentro del wrapper

        function update() {
            var docTop = $win.scrollTop();
            var winH = $win.height();
            var docBottom = docTop + winH;

            $containers.each(function() {
                var $wrap = $(this);
                var $timeline = $wrap.find(".vertical-scrollable-timeline");
                var $items = $timeline.find("li");

                // Activa/desactiva items según visibilidad
                $items.each(function() {
                    var $el = $(this);
                    var top = $el.offset().top;
                    var bottom = top + winH * 0.5;

                    if (bottom <= docBottom && top >= docTop) {
                        $el.addClass("active");
                    } else if (!(bottom <= docBottom)) {
                        $el.removeClass("active");
                    }
                });

                // Progreso de la barra .inner (clamp para evitar overflow)
                var cont = $timeline[0];
                if (cont) {
                    var rect = cont.getBoundingClientRect();
                    var h = rect.bottom - window.innerHeight * 0.5;
                    h = Math.max(0, Math.min(h, rect.height));
                    $timeline.find(".list-progress .inner").css("height", h + "px");
                }
            });
        }

        var ticking = false;

        function onScrollOrResize() {
            if (!ticking) {
                ticking = true;
                window.requestAnimationFrame(function() {
                    update();
                    ticking = false;
                });
            }
        }

        $win.on("load resize scroll", onScrollOrResize);
        update(); // primer cálculo
    })();
    </script>

</body>

</html>