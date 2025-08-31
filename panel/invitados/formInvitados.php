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

    <!-- form -->
    <div class="section section-ceremonia">
        <!-- Card  -->
        <div class="login-box">
            <h1 style="color: #fff;"><?php echo(isset($codigo))? "Edita tu ": " Introduce tu ";?>Invitado</h1>
            <form method="POST"
                action="ctrlInvitados.php?accion=<?php echo(isset($codigo))? "update&codigo=".$codigo: "add"; ?>">

                <!-- Código: SOLO 10 caracteres -->
                <div class="user-box">
                    <input type="text" id="codigo" name="codigo"
                        value="<?php echo(isset($codigo)) ? $datosInvitado['codigo'] : ''; ?>" readonly required
                        maxlength="10"> <!-- 👈 límite a 10 -->
                    <label class="codigofamilia">Código</label>
                </div>

                <!-- Nombre familia: SOLO letras -->
                <div class="user-box">
                    <input type="text" id="nombre_familia" name="nombre_familia"
                        value="<?php echo(isset($codigo)) ? $datosInvitado['nombre_familia'] : ''; ?>" required
                        pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="Solo letras y espacios">
                    <label>Nombre de la familia</label>
                </div>

                <!-- Pases: SOLO números -->
                <div class="user-box">
                    <input type="number" name="pases" value="<?php echo(isset($codigo)) ? $datosInvitado['pases']:"";?>"
                        required min="0">
                    <label>Pases</label>
                </div>

                <!-- Niños: SOLO números -->
                <div class="user-box">
                    <input type="number" name="ninos" value="<?php echo(isset($codigo)) ? $datosInvitado['ninos']:"";?>"
                        required min="0">
                    <label>Niños</label>
                </div>

                <!-- Asistencia: texto libre -->
                <div class="user-box">
                    <input type="text" name="asistencia"
                        value="<?php echo(isset($codigo)) ? $datosInvitado['asistencia']:"pendiente";?>" required>
                    <label>Asistencia</label>
                </div>

                <div class="submit" style="text-align: center;">
                    <input type="submit" value="Guardar" id="form_button" />
                </div>
            </form>

        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const inputFamilia = document.getElementById("nombre_familia");
        const inputCodigo = document.getElementById("codigo");

        function generarCodigo() {
            let texto = inputFamilia.value.trim();
            if (!texto) {
                inputCodigo.value = "";
                return;
            }

            let palabras = texto.split(/\s+/);
            let abreviado = palabras.map(p => p.substring(0, 2).toUpperCase()).join("");
            inputCodigo.value = "20" + abreviado + "25";
        }

        // Generar en vivo mientras escribe
        inputFamilia.addEventListener("input", generarCodigo);

        // 👇 Generar también en la carga inicial (por si PHP ya trae un valor)
        generarCodigo();
    });
    </script>


</body>

</html>