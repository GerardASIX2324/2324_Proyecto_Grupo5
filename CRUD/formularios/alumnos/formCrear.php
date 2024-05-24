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
    <script src="../../js/validacionLogin.js"></script>
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

    <h2>Creando...</h2>
    <br>
    <div class="row">
        <div class="column-50">
        <form method="post" action="../../acciones/alumnos/crear.php"  >
            <label for="nombre_alum">Nombre:</label><br>
            <input type="text" name="nombre_alum" id="nombre" required><br>
            <p id="error_nombre"></p>
            <br>
            <label for="apellidos_alum">Apellidos del alumno:</label><br>
            <input type="text" name="apellidos_alum" id="apellido" required><br>
            <p id="error_apellido"></p>
            <br>
            <label for="DNI">DNI:</label><br>
            <input type="text" name="DNI" id="DNI" required><br>
            <p id="error_DNI"></p>
            <br>
            <label for="telefono">Telefono:</label><br>
            <input type="text" name="telefono" id="telefono" required><br> 
            <p id="error_telefono"></p>
            <br>
            <label for="mail">Mail:</label><br>
            <input type="text" name="mail" id="mail" required><br> 
            <p id="error_email"></p>
            <br>
            <label for="fecha">Fecha de nacimiento:</label><br>
            <input type="date" name="fecha" id="fecha" required><br> 
            <p id="error_fecha"></p>
            <br>
            <label for="fecha">id clase:</label><br>
            <input type="number" min="1" max="6" name="id_clase" id="id_clase" required ><br> 
            <p id="error_id"></p>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <div class="column-50">
        <img src="../../img/tabla_clases1.png" class="fotos">
    </div>
    <br><br>
</body>
</html>
          