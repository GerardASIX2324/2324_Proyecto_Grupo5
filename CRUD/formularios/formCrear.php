<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h2>Creando...</h2>
    <form action="../acciones/crear.php" method="post">
        <label for="nombre">Nombre de la Escuela:</label> <br>
        <input type="text" name="nombre" ><br>
        <label for="alumnos">Número de alumnos:</label><br>
        <input type="number" name="alumnos"><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>