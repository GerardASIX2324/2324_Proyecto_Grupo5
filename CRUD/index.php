<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="./js/validacionLogin.js"></script> 

</head>
<header>
    <nav>
        <img src="img/logo.png" class="logo" alt="">
        <ul class="cont-ul">
            
        </ul>
    </nav>
</header>
<body>
    <div class="img">
        <img src="./IMG/redondauser.jpg" alt="user" class="login">
    </div>
    <form class="indice" action="proc/procesar.php" method="post" onsubmit="return validarLogin()">        
        <label for="usuario">Usuario:</label>         
        <input type="text" id="usuario" name="usuario" required><br><br>         
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>  
        <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo "<p style='color: red;'>Error. No puedes acceder así. Debes iniciar sesión para poder continuar</p><br>";
            }
            ?>  

        <button type="submit" value="Iniciar Sesión">ENTRAR</button>
    <br>         
        <p id="validar"></p>
    </form>
    
</body>
</html>