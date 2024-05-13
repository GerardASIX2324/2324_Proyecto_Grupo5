<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h2>Editando...</h2>
    <?php
        require_once '../conexion.php';
        $codigo = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
        $consulta= "SELECT * FROM escuelas WHERE id = $codigo";
        $sentencia = $con->prepare($consulta);
        $sentencia->execute();
        $fila = $sentencia->fetch();
        $id = $fila['id'];
    ?>

    <form method="post" action="../acciones/editar.php">
        <label for="nombre">ID:</label>
        <input type="text" name="id" value="<?php echo $id; ?>" readonly><br>
        <label for="nombre">Nombre de la escuela:</label>
        <input type="text" name="nombre"><br>
        <label for="num_alumnos">Número de alumnos:</label>
        <input type="number" name="num_alu"><br> 
        <button type="submit">Enviar</button>
    </form>
</body>
</html>