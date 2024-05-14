<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="img">
    <img src="./IMG/redondauser.jpg" alt="user" width="350" height="200">
    </div>
    <form onsubmit="return validarFormulario()">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" required><br><br>
    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required><br><br>
    <input type="submit" value="Iniciar Sesión">
    <p id="validar"></p>
</form>

<script src="./JavaScript/validacion.js"></script> 
</body>
</html>
