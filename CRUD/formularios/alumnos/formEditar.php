<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src ="../../js/validacionLogin.js"></script>
</head>
<header>
    <nav>
        <img src="../../img/logo.png" class="logo" alt="">
        <ul class="cont-ul">
        <li class="develop">
                Administrador 
                <ul class="ul-second">
                    <li class="back"><a class="barra" href="../../proc/logout.php">Cerrar sesión</li></a>
                </ul>
            </li>
        <li class="develop"><a class="barra" href="../../view/alumnos.php">Volver a la tabla</li></a>
            
        </ul>
    </nav>
</header>
<br><br>
<body>
    <h2>Editando...</h2>
    <?php
        require_once '../../conexion.php';
        $codigo = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
        $consulta= "SELECT * FROM tbl_alumno WHERE id_alum = $codigo";
        $sentencia = $con->prepare($consulta);
        $sentencia->execute();
        $fila = $sentencia->fetch();
        $id = $fila['id_alum'];
        $nombre = $fila['nombre_alum'];
        $apellidos = $fila['apellidos_alum'];
        $dni = $fila['DNI_alum'];
        $telf = $fila['telf_alum'];
        $mail = $fila['mail_alum'];
        $fecha = $fila['fecha_naci_alum'];
        $clase = $fila['id_clase'];
    ?>
<div class="row">
    <div class="column-50">
        <form method="post" action="../../acciones/alumnos/editar.php">
            <label for="id">ID:</label>
            <input type="text" name="id_alum" value="<?php echo $id; ?>" readonly>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre_alum" required value="<?php echo $nombre; ?>"><br>
            <p id="error_nombre"></p>
            <br>
            <label for="apellidos_alum">Apellidos del alumno:</label>
            <input type="text" id="apellido" name="apellidos_alum" required value="<?php echo $apellidos; ?>"><br>
            <p id="error_apellido"></p>
            <br>
            <label for="Dni">DNI:</label>
            <input type="text" id="DNI" name="DNI" required value="<?php echo $dni; ?>"><br>
            <p id="error_DNI"></p>
            <br>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required value="<?php echo $telf; ?>"><br>
            <p id="error_telefono"></p>
            <br>
            <label for="mail">Mail:</label>
            <input type="text" id="mail" name="mail" required value="<?php echo $mail; ?>"><br>
            <p id="error_email"></p>
            <br>
            <label for="fecha">Fecha de nacimiento:</label>
            <input type="date"  id="fecha" name="fecha" required value="<?php echo $fecha; ?>"><br>
            <p id="error_fecha"></p>
            <br>
            <label for="fecha">ID clase:</label>
            <input type="number" id="id_clase" name="clase" min="1" max="6" required value="<?php echo $clase; ?>"><br>
            <p id="error_id"></p>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <div class="column-50">
        <img src="../../img/tabla_clases1.png" class="fotos">
    </div>
</div>

</body>
</html>