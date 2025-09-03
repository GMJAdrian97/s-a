<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S&A</title>
    <link rel="stylesheet" href="/sya/css/cssPrincipal.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&display=swap"
        rel="stylesheet">

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

    <!-- Alojamiento A -->
    <div class="section section-ceremonia">
        <!-- Card Ceremonia -->
        <div class="col-4"><img src="/sya/imgs/IconHospedaje.png" class="img-icons" alt=""></div>
        <div class="card card-ceremonia" id="Ceremonia">
            <img class="img-cards" src="/sya/imgs/HotelPosadaVirreydeMendoza.png" alt="">
            <p><strong>Opcion A (Recomendada)</strong></p>
            <p><strong>Hotel Posada Virrey de Mendoza, <br /> Acámbaro, Gto</strong></p>
            <a href="https://share.google/BAfw6tasv7k7OOhnP" target="_blank">
                <button class="btn btn--block card__btn">Mas Informacion</button>
            </a>
            <!-- Boton que disparan el modal -->
            <button class="btn btn--block card__btn sa-open-modal" data-texto="<p><strong>Hotel Posada Virrey de Mendoza</strong> <br /><Br />(Recomendacion) <br />Ubicado en pleno
                    corazón de Acámbaro y
                    muy
                    cerca del templo donde se celebrará nuestra boda, este hotel es una opción ideal para disfrutar de
                    la fiesta sin prisas. Rodeado de comercios y espacios para pasear, ofrece estacionamiento y
                    restaurante, asegurando comodidad durante su estancia.</p><br />
                <p> Con Cariño S&A. </p>" data-imagen="/sya/imgs/IconHospedaje.png"><img class="img-interrogacion"
                    src="/sya/imgs/interrogacion.png" /></button>
        </div>
    </div>

    <!-- Alojamiento B-->
    <div class="section section-ceremonia">
        <!-- Card Ceremonia -->
        <div class="card card-ceremonia" id="Ceremonia">
            <img class="img-cards" src="/sya/imgs/mesonpuente.jpg" alt="">
            <p><strong>Opcion B</strong></p>
            <p><strong>Hotel Meson del puente, <br /> Acámbaro, Gto</strong></p>
            <a href="https://share.google/YORXkhFwhanEcTQsF" target="_blank">
                <button class="btn btn--block card__btn">Mas Informacion</button>
            </a>
            <!-- Boton que disparan el modal -->
            <button class="btn btn--block card__btn sa-open-modal" data-texto="<p><strong>Hotel Meson del puente</strong><br /><br />
                    Este hotel, aunque está un poco más alejado del centro y del templo, ofrece una experiencia más
                    completa y confortable. Cuenta con restaurante, bar, piscina, cancha de pádel y un amplio
                    estacionamiento, lo que lo convierte en una opción ideal para relajarse y disfrutar al máximo
                    antes y después de la boda.</p><br />
                <p> Con Cariño S&A. </p>" data-imagen="/sya/imgs/IconHospedaje.png"><img class="img-interrogacion"
                    src="/sya/imgs/interrogacion.png" /></button>
        </div>
    </div>

    <!-- Alojamiento c-->
    <div class="section section-ceremonia">
        <!-- Card Ceremonia -->
        <div class="card card-ceremonia" id="Ceremonia">
            <img class="img-cards" src="/sya/imgs/Kali.png" alt="">
            <p><strong>Opcion C</strong></p>
            <p><strong>Kali Doña Tere Hotel Boutique<br /> Acámbaro, Gto</strong></p>
            <a href="https://share.google/JDnmPJuTZvSHeYtNe" target="_blank">
                <button class="btn btn--block card__btn">Mas Informacion</button>
            </a>
            <!-- Boton que disparan el modal -->
            <button class="btn btn--block card__btn sa-open-modal" data-texto=" <p><strong>Kali Doña Tere Hotel Boutique</strong><br /><br />
                <p>Este hotel también se encuentra en una zona céntrica de Acámbaro, no tan lejos del templo
                    donde se celebrará nuestra boda. Aunque su ubicación no es tan vistosa como la primera
                    opción, ofrece la misma comodidad y servicios: restaurante, estacionamiento y cercanía a
                    comercios para disfrutar su estancia con tranquilidad.</p><br />
                <p> Con Cariño S&A. </p>" data-imagen="/sya/imgs/IconHospedaje.png"><img class="img-interrogacion"
                    src="/sya/imgs/interrogacion.png" /></button>
        </div>
    </div>
    <div class="card card-ceremonia" id="btnAlo">
        <a href="/sya/invitacion.php#Hoteles">
            <button class="btn btn--block card__btn">Regresar</button>
        </a>
    </div>

    <script src="/sya/js/nav.js"></script>
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