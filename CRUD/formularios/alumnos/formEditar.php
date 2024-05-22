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
</head>
<header>
    <nav>
        <img src="../../img/logo.png" width="7%" alt="">
        <ul class="cont-ul">
        <li class="develop"><a class="barra" href="../../view/alumnos.php">Volver a la tabla</li></a>
            <li class="develop">
                Administrador 
                <ul class="ul-second">
                    <li class="back"><a class="barra"href="../../index.php">Cerrar sesión</li></a>
                </ul>
            </li>
            <li>

            </li>
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
            <input type="text" name="nombre_alum" value="<?php echo $nombre; ?>">

            <label for="apellidos_alum">Apellidos del alumno:</label>
            <input type="text" name="apellidos_alum" value="<?php echo $apellidos; ?>">

            <label for="Dni">DNI:</label>
            <input type="text" name="DNI" value="<?php echo $dni; ?>">

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" value="<?php echo $telf; ?>">

            <label for="mail">Mail:</label>
            <input type="text" name="mail" value="<?php echo $mail; ?>">

            <label for="fecha">Fecha de nacimiento:</label>
            <input type="date" name="fecha" value="<?php echo $fecha; ?>">

            <label for="fecha">ID clase:</label>
            <input type="number" name="clase" min="1" max="6" value="<?php echo $clase; ?>"><br>

            <button type="submit">Enviar</button>
        </form>
    </div>
    <div class="column-50">
        <img src="../../img/tabla_clases1.png" class="fotos">
    </div>
</div>

</body>
</html>