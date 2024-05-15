<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <div class="img">
        <img src="./IMG/redondauser.jpg" alt="user" class="login">
    </div>
    <form onsubmit="return validarFormulario()">
        <label for="usuario" class="login">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        <button type="submit" value="Iniciar Sesión">
        <p id="validar">Inicar sesión</p>
    </form>

<script src="JavaScript/validacion.js"></script> 
</body>
</html>
