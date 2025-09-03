<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S&A</title>
    <link rel="stylesheet" href="/sya/css/cssPrincipal.css">
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

    <!-- Carta -->
    <div class="card Card-carta">
        <h2>Muchas gracias por confirmar tu asistencia. Nos hace muy felices que nos acompañen en este día tan
            importante. Gracias por ser parte de nuestra
            historia y por celebrar junto a nosotros este momento único.</h2>
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

    <!-- Seccion Contacto -->
    <div class="section section-asistencia" id="asistencia">

        <!-- Card Contactanos -->
        <div class="col-4"><img src="/sya/imgs/IconContacto.png" class="img-icons" alt=""></div>
        <div class="card card-ceremonia" id="asistencia">
            <img class="img-cards" src="" alt="">
            <p><strong>Contactanos</strong></p>
            <p>Si surge algún cambio o necesitas ajustar algo (asistencia, pases, menú infantil, etc.), no dudes en
                contactarnos. Queremos que disfrutes sin preocupaciones..<br /><br />

                Con cariño,<br />
                Samira & Adrian.</p>

            <!-- Botón WhatsApp 1 -->
            <a href="https://api.whatsapp.com/send?phone=524613591050&text=Hola%20Samira,%20les%20mando%20mensaje%20porque%20tengo%20la%20siguiente%20duda%20respecto%20a%20boda:"
                target="_blank" style="text-decoration:none;">
                <button class="btn-whatsapp">Contactar con Samira</button>
            </a>

            <!-- Botón WhatsApp 2 -->
            <a href="https://api.whatsapp.com/send?phone=524171206223&text=Hola%20Adrian,%20les%20mando%20mensaje%20porque%20tengo%20la%20siguiente%20duda%20respecto%20a%20boda:"
                target="_blank" style="text-decoration:none;">
                <button class="btn-whatsapp">Contactar con Adrián</button>
            </a><br /><br />

            <!-- Nombre familia: SOLO letras -->
        </div><br /><br />
    </div>

    <!-- Seccion Contacto -->
    <div class="section section-asistencia" id="asistencia">
        <!-- Card Mesa rtegalos -->
        <div class="col-4"><img src="/sya/imgs/IconExtras.png" class="img-icons" alt=""></div>
        <div class="card card-ceremonia" id="asistencia">
            <div class="col-4"><img src="/sya/imgs/IconSobresMoney.png" class="img-icons" alt=""></div>
            <p><strong>Tu presencia es nuestro mejor regalo</strong></p>
            <p>No es necesario traer obsequios, pero si deseas honrarnos con un detalle, tendremos disponible la
                dinámica de sobres de dinero y también una mesa de regalos en Mercado Libre, o si lo prefieres, podrás
                entregarlo presencialmente el día del evento.<br /></p>

            <!-- Botón WhatsApp 1 -->
            <a href="https://meli.uniko.co/E6204/boda/regalos_para_samira_y_adrian" target="_blank"
                style="text-decoration:none;">
                <button class="btn-MercadoLobre">Mesa de regalos</button>
            </a><br /><br />

            <!-- Nombre familia: SOLO letras -->
        </div><br /><br />
        <!-- Card Mesa rtegalos -->
        <div class="card card-ceremonia" id="asistencia">
            <div class="col-4"><img src="/sya/imgs/IconNinos.png" class="img-icons" alt=""></div>
            <p>Queremos que los más pequeños también disfruten al máximo este día tan especial. Para ellos tendremos un
                espacio pensado con cariño, con inflables, actividades tipo feria, bajo el cuidado de niñeras que estará
                al pendiente
                de que coman, jueguen y, sobre todo, que estén bien cuidados y seguros durante la celebración.<br />
            </p>

            <!-- Botón  -->
            <button class="btn btn--block card__btn sa-open-modal" data-texto="<p>El servicio de niñeras estará disponible de 4:00 p.m. a 8:00 p.m., aunque la zona infantil permanecerá abierta en todo momento.<br /><br />
                                Los niños contarán con un menú especial de pizza y jugo en su propio espacio infantil. Por esta razón, no tendrán lugar en las mesas de adultos, ya que su área está diseñada especialmente
                                para que disfruten de forma cómoda, divertida y con toda la atención que merecen.</p><br />
                                <p> Con Cariño S&A. </p>" data-imagen="/sya/imgs/IconNinos.png"><img
                    class="img-interrogacion" src="/sya/imgs/interrogacion.png" /></button>
            </a><br /><br />

            <!-- Nombre familia: SOLO letras -->
        </div><br /><br />
        <!-- Card La fidela -->
        <div class="card card-ceremonia" id="asistencia">
            <div class="col-4"><img src="/sya/imgs/IconMusicaVivo.png" class="img-icons" alt=""></div>
            <div class="col-4"><img src="/sya/imgs/lafidela.jpg" class="imglogosbandas" alt=""></div>
            <p><strong>La Fidela</strong></p>
            <p>¡Prepárense para cantar y disfrutar al máximo con La Fidela, una banda
                originaria de Acámbaro, Guanajuato, que nos hará vibrar con los mejores covers del rock alternativo
                mexicano —Caifanes, Enanitos Verdes, Café Tacuba y muchos más— además de clásicos en inglés que pondrán
                a todos a corear.<br /></p>

            <!-- Botón face 1 -->
            <a href="https://www.facebook.com/lafidela.mx/" target="_blank"
                style="text-decoration:none;">
                <button class="btn-Face">Facebook</button>
            </a><br /><br />

            <!-- banda los de hidalgo-->
            <div class="col-4"><img src="/sya/imgs/bandahidalgo.jpg" class="imglogosbandas" alt=""></div>
            <p><strong>Mi Banda los de Hidalgo</strong></p>
            <p>¡Prepárense para bailar sin parar! Mi Banda Los de Hidalgo son un tributo
                a La Banda el Mexicano y sus grandes éxitos como Ramito de Violetas, No Bailes de Caballito y Mambo
                Lupita.
                Y claro… no podrá faltar el clásico la bota.<br /></p>

            <!-- Botón face 3 -->
            <a href="https://www.facebook.com/people/Mi-Banda-Los-De-Hidalgo/100083953266034/" target="_blank"
                style="text-decoration:none;">
                <button class="btn-Face">Facebook</button>
            </a><br /><br />
            <div class="col-4"><img src="/sya/imgs/lidernorte.jpg" class="imglogosbandas" alt=""></div>
            <p><strong>Lider Norte</strong></p>
            <p>Con todo el sabor norteño! Con ustedes, Líder Norte, una banda
                originaria de Acámbaro, Guanajuato, que pondrá a todos a
                bailar con su tributo a las mejores cumbias norteñas y huapangos.
                Prepárense para gozar con esos ritmos alegres y contagiosos que harán imposible quedarse sentado.<br />
            </p>

            <!-- Botón face 3 -->
            <a href="https://www.facebook.com/p/L%C3%ADder-Norte-100063653825967/" target="_blank"
                style="text-decoration:none;">
                <button class="btn-Face">Facebook</button>
            </a><br /><br />
        </div><br /><br />
    </div>


    <!-- Seccion Itinerario -->
    <div class="section section-recepcion">

        <!-- Card Tinerario -->
        <div class="col-4"><img src="/sya/imgs/IconItinerario.png" class="img-icons" alt=""></div>
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
                                <img src="/sya/imgs/IglesiaIcon.png" class="img-icons" alt="">
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
                    <p> Con Cariño S&A. </p>" data-imagen="/sya/imgs/iconRecepcion.png"><img class="img-interrogacion"
                                        src="/sya/imgs/interrogacion.png" /></button>
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                                <img src="/sya/imgs/RecepcionIcon.png" class="img-icons" alt="">
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
                                <p> Con Cariño S&A. </p>" data-imagen="/sya/imgs/IconComida.png"><img
                                        class="img-interrogacion" src="/sya/imgs/interrogacion.png" /></button>
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                                <img src="/sya/imgs/ComidaIcon.png" class="img-icons" alt="">
                            </div>
                        </li>
                        <!--  Item 4 -->
                        <li>
                            <p> <strong>Protocolo</strong> <br />
                                De 6:00pm. a 7:00pm
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                                <img src="/sya/imgs/ProtocoloIcon.png" class="img-icons" alt="">
                            </div>
                        </li>
                        <!--  Item 5 -->
                        <li>
                            <p> <strong>¡A disfrutar!</strong> <br />
                                De 7:30pm
                            </p><br /><br />
                            <!-- Icono -->
                            <div class="icon-holder">
                                <img src="/sya/imgs/FiestaIcon.png" class="img-icons" alt="">
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
                                <img src="/sya/imgs/FinFiestaIcon.png" class="img-icons" alt="">
                            </div>
                        </li>

                    </ul><!-- /.vertical-scrollable-timeline -->
                </div><!-- /.timeline-container -->

            </div>

        </div>

    </div>

    <div class="section section-presentacion">
        <img src="/sya/imgs/imagenagradecimiento.png" alt="">
    </div>


    <script src="/sya/js/relojRegresivo.js"></script>
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

     <!-- Scrip que hace que al dar para atras en el navegador recahra la pagina principal y no la de validacion  -->
    <script>
    window.addEventListener("popstate", function(event) {
        // Redirigir a otra página si intentan regresar
        window.location.href = "/sya/invitacion.php";
    });
    </script>

</body>

</html>