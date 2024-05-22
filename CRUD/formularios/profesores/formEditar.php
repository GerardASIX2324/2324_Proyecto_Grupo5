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
        <li class="develop"><a class="barra" href="../../view/profesores.php">Volver a la tabla</li></a>
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
        $consulta= "SELECT * FROM tbl_profesor WHERE id_prof = $codigo";
        $sentencia = $con->prepare($consulta);
        $sentencia->execute();
        $fila = $sentencia->fetch();
        $id = $fila['id_prof'];
        $nombre = $fila['nombre_prof'];
        $apellidos = $fila['apellidos_prof'];
        $dni = $fila['DNI_prof'];
        $telf = $fila['telf_prof'];
        $mail = $fila['mail_prof'];
        $id_dept = $fila['id_dept'];
    ?>
    <div class="row">
        <div class="column-50">
            <form method="post" action="../../acciones/profesores/editar.php">
                <label for="id">ID:</label>
                <input type="text" name="id_prof" value="<?php echo $id; ?>" readonly><br>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre_prof" value="<?php echo $nombre; ?>"><br>
                <label for="apellidos_alum">Apellidos:</label>
                <input type="text" name="apellidos_prof"value="<?php echo $apellidos; ?>"><br>
                <label for="Dni">DNI:</label>
                <input type="text" name="DNI" value="<?php echo $dni; ?>"><br>
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" value="<?php echo $telf; ?>"><br> 
                <label for="mail">Mail:</label>
                <input type="text" name="mail" value="<?php echo $mail; ?>"><br> 
                <label for="fecha">Id departamento:</label>
                <input type="number" name="id_dept" min="1" max="2" value="<?php echo $id_dept; ?>"><br> 
                
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="column-50">
            <img src="../../img/tabla_departamentos.png" class="fotodept">
        </div>
</body>
</html>