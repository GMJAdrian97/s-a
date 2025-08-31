<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S&A</title>
    <link rel="stylesheet" href="/s&a/css/cssPrincipal.css">
    <link rel="stylesheet" href="/s&a/css/datatables.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="/s&a/js/datatables.js"></script>

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
        <!-- Card  -->
        <div class="card card-VistaNovios" id="Ceremonia">
            <h1>Invitados</h1>
            <a href="ctrlInvitados.php?accion=new"><button class="btn btn--block card__btn">Agregar
                    Invitado</button></a>
            <table id="example" class="display">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre Familia</th>
                        <th>Pases</th>
                        <th>Asistencia</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                foreach ($datosInvitados as $key => $datosInvitado):
            ?>
                    <tr>
                        <td><?php echo $datosInvitado['codigo']?></td>
                        <td><?php echo $datosInvitado['nombre_familia'] ?></td>
                        <td><?php echo $datosInvitado['pases'] ?></td>
                        <td><?php echo $datosInvitado['asistencia'] ?></td>
                        <td>
                            <div>
                                <!-- Boton que disparan el modal -->
                                <button class="Noviosbtn btn--block card__btn sa-open-modal novios" data-texto="<p><strong>Familia: </strong><?php echo $datosInvitado['nombre_familia'] ?>
                                        <br /><Br />
                                        <strong>Pases: </strong><?php echo $datosInvitado['pases'] ?>
                                        <br /><Br />
                                        <strong>Niños: </strong><?php echo $datosInvitado['ninos'] ?>
                                        <br /><Br />
                                        <strong>Asistira: </strong><?php echo $datosInvitado['asistencia'] ?>
                                        <br /><Br />" data-imagen="/s&a/imgs/IconAsistencia.png"><img
                                        class="img-interrogacionNovios" src="/s&a/imgs/inf.png" /></button>

                                <a
                                    href="ctrlInvitados.php?accion=modify&codigo=<?php echo $datosInvitado['codigo']; ?>"><img
                                        class="img-interrogacionNovios" src="/s&a/imgs/edicion.png" /></a>
                                <a
                                    href="ctrlInvitados.php?accion=borrar&codigo=<?php echo $datosInvitado['codigo']; ?>"><img
                                        class="img-interrogacionNovios" src="/s&a/imgs/eliminar.png" /></a>
                            </div>
                        </td>
                    </tr>
                    <?php
                endforeach;
            ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
    new DataTable('#example');
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