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
    <script>
    history.pushState(null, null, location.href);
    window.onpopstate = function() {
        history.go(1); // Evita retroceder, lo fuerza a quedarse
    };
    </script>
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
        <img src="/sya/imgs/AgradecimientoAlnopoder.png" alt="">
    </div>

    <!-- Seccion Contacto -->
    <div class="section section-asistencia" id="asistencia">

        <!-- Card Contactanos -->
        <div class="col-4"><img src="/sya/imgs/IconContacto.png" class="img-icons" alt=""></div>
        <div class="card card-ceremonia" id="asistencia">
            <img class="img-cards" src="" alt="">
            <p><strong>Contactanos</strong></p>
            <p>Si cambias de opinion o los planes se reacomodan en caso que ya nos puedas acomppar
                contactanos<br /><br />

                Con cariño,<br />
                Samira & Adrian.</p>

            <!-- Botón WhatsApp 1 -->
            <a href="https://api.whatsapp.com/send?phone=524613591050&text=Hola%20Samira,%20les%20mando%20mensaje%20porque%20Cambie%20la%20de%20opinion%20respecto%20a%20mi%20asistencia%20en%20su%20boda:"
                target="_blank" style="text-decoration:none;">
                <button class="btn-whatsapp">Contactar con Samira</button>
            </a>

            <!-- Botón WhatsApp 2 -->
            <a href="https://api.whatsapp.com/send?phone=524171206223&text=Hola%20Adrian,%20les%20mando%20mensaje%20porque%20Cambie%20la%20de%20opinion%20respecto%20a%20mi%20asistencia%20en%20su%20boda:"
                target="_blank" style="text-decoration:none;">
                <button class="btn-whatsapp">Contactar con Adrián</button>
            </a><br /><br />

            <!-- Nombre familia: SOLO letras -->
        </div><br /><br />
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


</body>

</html>