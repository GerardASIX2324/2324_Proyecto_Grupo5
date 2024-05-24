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
        <li class="develop"><a class="barra" href="../../view/profesores.php">Volver a la tabla</li></a>
            
        </ul>
    </nav>
</header>
<br><br>
<body>
    
    <h2>Creando...</h2>
    <div class="row">
        <div class="column-50">
            <form method="post" action="../../acciones/profesores/crear.php">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre_prof" required id="nombre"><br>
                <p id="error_nombre"></p>
                <br>
                <label for="apellidos_prof">Apellidos:</label>
                <input type="text" name="apellidos_prof"required  id="apellido"><br>
                <p id="error_apellido"></p>
                <br>
                <label for="Dni">DNI:</label>
                <input type="text" name="DNI" required id="DNI"><br>
                <p id="error_DNI"></p>
                <br>
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" required id="telefono"><br> 
                <p id="error_telefono"></p>
                <br>
                <label for="mail">Mail:</label>
                <input type="text" name="mail" required id="mail"><br>
                <p id="error_email"></p>
                <br>
                <label for="fecha">id departamento:</label><br>
                <input type="number" name="id_dept" required id="id_dept"><br> 
                <p id="error_iddept"></p>
                <br>
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="column-50">
            <img src="../../img/tabla_departamentos.png" class="fotodept">
        </div>
</body>
</html> 
