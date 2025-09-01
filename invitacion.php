<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S&A</title>
    <link rel="stylesheet" href="/s&a/css/cssPrincipal.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" rel="stylesheet" />

</head>

<body>

    <!-- Modal único -->
    <div id="sa-modal" class="sa-modal-overlay">
        <div class="sa-modal">
            <span class="sa-close">&times;</span>
            <img id="sa-modal-img" src="" alt="" style="display:none;">
            <p id="sa-modal-texto">Aquí irá el texto dinámico</p>
        </div>
    </div>

    <div class="section section-presentacion">
        <img src="/s&a/imgs/img-bienvenidaTransparente.png" alt="">
    </div>

    <!-- --------------------------- Reloj de cuenta regresiva --------------------------- -->
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

    <!-- seccion Recepción -->
    <div class="section section-recepcion" id="Recepcion">

        <!-- Card Recepción -->
        <div class="col-4"><img src="/s&a/imgs/iconRecepcion.png" class="img-icons" alt=""></div>
        <div class="card card-ceremonia">
            <img class="img-cards" src="/s&a/imgs/imgRancho1.png" alt="">
            <p><strong>Hora:</strong> 03:00 PM. hrs</p>
            <p><strong>Lugar:</strong> Rancho Martinez, Acámbaro, Gto</p>
            <a href="https://maps.app.goo.gl/pRwgbNgvUrDiNzZ37" target="_blank">
                <button class="btn btn--block card__btn">Ubicacion</button>
            </a>
            <!-- Boton que disparan el modal -->
            <button class="btn btn--block card__btn sa-open-modal" data-texto="<p>Nos llena de ilusión recibirlos en la Recepción, que se llevará a cabo en el Rancho Martínez.
                        Para su comodidad, el acceso será únicamente a partir de las 3:00 p.m., momento en que con gusto los
                        atenderemos.</p><br />
                    <p>Se llevará un control de pases de entrada, por lo que será indispensable presentarlos completos al
                        ingresar.</p><br />
                    <p> Con Cariño S&A. </p>" data-imagen="/s&a/imgs/iconRecepcion.png"><img class="img-interrogacion"
                    src="/s&a/imgs/interrogacion.png" /></button>
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
                            <p> <strong>Ceremonia</strong> <br />
                                De: 1:00pm. a 2:00pm.
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                                <img src="/s&a/imgs/IglesiaIcon.png" class="img-icons" alt="">
                            </div>
                        </li>

                        <!--  Item 2 /s&a-->
                        <li>
                            <p><strong>Recepcion</strong> <br />
                                En Rancho Martinez <br /> De 3:00pm. a 3:30pm. <br />
                                <!-- Boton que disparan el modal -->
                                <button class="btn btn--block card__btn sa-open-modal" data-texto="<p>Nos llena de ilusión recibirlos en la Recepción, que se llevará a cabo en el Rancho Martínez.
                        Para su comodidad, el acceso será únicamente a partir de las 3:00 p.m., momento en que con gusto los
                        atenderemos.</p><br />
                    <p>Se llevará un control de pases de entrada, por lo que será indispensable presentarlos completos al
                        ingresar.</p><br />
                    <p> Con Cariño S&A. </p>" data-imagen="/s&a/imgs/iconRecepcion.png"><img class="img-interrogacion"
                                        src="/s&a/imgs/interrogacion.png" /></button>
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                                <img src="/s&a/imgs/RecepcionIcon.png" class="img-icons" alt="">
                                <!-- <i class="fa-solid fa-circle-info"></i> -->
                            </div>
                        </li>

                        <!--  Item 3 -->
                        <li>
                            <p> <strong>Comida</strong> <br />
                                De 3:30pm. a 5:30pm <br /> <button class="btn btn--block card__btn sa-open-modal"
                                    data-texto="<p>Es importante llegar a la recepción a las 3:00 p.m., o a más tardar 3:30 p.m., ya que
                                    en ese momento dará inicio la comida. El servicio estará disponible únicamente
                                    durante dos horas, finalizando a las 5:30 p.m. Queremos que todos nuestros invitados
                                    disfruten de este momento tan especial y que nadie se quede sin compartir el
                                    banquete con nosotros.</p><br />
                                <p> Con Cariño S&A. </p>" data-imagen="/s&a/imgs/IconComida.png"><img
                                        class="img-interrogacion" src="/s&a/imgs/interrogacion.png" /></button>
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                                <img src="/s&a/imgs/ComidaIcon.png" class="img-icons" alt="">
                            </div>
                        </li>
                        <!--  Item 4 -->
                        <li>
                            <p> <strong>Protocolo</strong> <br />
                                De 6:00pm. a 7:00pm
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                                <img src="/s&a/imgs/ProtocoloIcon.png" class="img-icons" alt="">
                            </div>
                        </li>
                        <!--  Item 5 -->
                        <li>
                            <p> <strong>¡A disfrutar!</strong> <br />
                                De 7:30pm
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                                <img src="/s&a/imgs/FiestaIcon.png" class="img-icons" alt="">
                            </div>
                        </li>
                        <li>
                            <p> <strong>¡Que? Que...?!</strong><br />
                                La fiesta de acaba...
                                <br /> Hasta que el cuerpo aguante.
                            </p>
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
    <div class="section section-hospedaje" id="Hoteles">

        <!-- Card Recepción -->
        <div class="col-4"><img src="/s&a/imgs/IconHostedaje.png" class="img-icons" alt=""></div>
        <div class="card card-ceremonia" id="Ceremonia">
            <img class="img-cards" src="" alt="">
            <p><strong>¡Quedate!:</strong></p>
            <p>Queremos que disfrutes de nuestra boda sin preocupaciones, nos encantaría que
                te quedaras disfrutar de la fiesta e principio a fin, por eso te compartimos algunas opciones de
                alojamiento cercanas.</p>
            <a href="/s&a/alojamiento.php">
                <!-- target="_blank" -->
                <button class="btn btn--block card__btn">Alojamiento</button>
            </a>
        </div>
    </div>

    <!-- Seccion Asitencia -->
    <div class="section section-asistencia" id="asistencia">

        <!-- Card Recepción -->
        <div class="col-4"><img src="/s&a/imgs/IconAsistencia.png" class="img-icons" alt=""></div>
        <div class="card card-ceremonia" id="asistencia">
            <img class="img-cards" src="" alt="">
            <p><strong>Confirma tu asistencia:</strong></p>
            <p>Hemos apartado un lugar especial para ti en nuestra boda.
                Nos encantaría contar con tu presencia, por favor confírmanos si podrás acompañarnos.
                Tu respuesta es muy importante para nosotros.<br /><br />

                Con cariño,<br />
                Samira & Adrian.</p>
            <!-- Nombre familia: SOLO letras -->



            <div class="section section-ceremonia">
                <!-- Card  -->
                <form method="POST" action="/s&a/panel/invitados/ctrlInvitados.php?accion=BuscarInvitacion">
                    <div class="user-box">
                        <input class="LabelCodigoInvitacion" type="text" id="codigo" name="codigo" value="" required><br /><br />
                        <label>Introduce tu Codigo de invitacion</label>
                    </div><br />
                    <div class="submit" style="text-align: center;">
                        <input type="submit" value="Buscar Invitacion" id="form_button" />
                    </div><br /><br />
                </form>


            </div>
        </div><br /><br />

        <script src="/s&a/js/relojRegresivo.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script> -->
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

        <!-- Script para los mensajes modales -->
        <script>
        document.addEventListener("DOMContentLoaded", () => {
            const modal = document.getElementById("sa-modal");
            const modalTexto = document.getElementById("sa-modal-texto");
            const modalImg = document.getElementById("sa-modal-img");
            const btnCerrar = modal.querySelector(".sa-close");
            const botonesAbrir = document.querySelectorAll(".sa-open-modal");

            botonesAbrir.forEach(boton => {
                boton.addEventListener("click", () => {
                    const texto = boton.getAttribute("data-texto");
                    const imagen = boton.getAttribute("data-imagen");

                    // 👉 Ahora sí interpreta <p>, <br>, <strong>, etc.
                    modalTexto.innerHTML = texto;

                    if (imagen) {
                        modalImg.src = imagen;
                        modalImg.style.display = "block";
                    } else {
                        modalImg.style.display = "none";
                        modalImg.removeAttribute("src");
                    }

                    modal.style.display = "flex";
                });
            });

            btnCerrar.addEventListener("click", () => {
                modal.style.display = "none";
            });

            modal.addEventListener("click", (e) => {
                if (e.target === modal) {
                    modal.style.display = "none";
                }
            });
        });
        </script>

</body>

</html>