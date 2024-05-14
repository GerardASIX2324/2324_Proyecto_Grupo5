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
<body>
    <h2>Creando...</h2>
    <form method="post" action="../../acciones/profesores/crear.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre_prof"><br>
        <label for="apellidos_prof">Apellidos:</label>
        <input type="text" name="apellidos_prof"><br>
        <label for="Dni">DNI:</label>
        <input type="text" name="DNI"><br>
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono"><br> 
        <label for="mail">Mail:</label>
        <input type="text" name="mail"><br>
        <br>
        <label for="fecha">id departamento:</label>
        <input type="number" name="id_dept" min="1" max="2"><br> 
        <button type="submit">Enviar</button>
    </form>
</body>
</html> 
