<?php
session_start();

// Definir nombre de usuario y contraseña
$usuario1 = 'admin';
$contrasena1 = '12345aA';

// Comprobar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener usuario y contraseña del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Verificar si el usuario y la contraseña son correctos
    if ($usuario === $usuario1 && $contrasena === $contrasena1){
        // Iniciar sesión y redirigir al usuario a una página de inicio
        $_SESSION['usuario'] = $usuario;
        header('Location: inicio.php');
        exit();
    } else {
        // Si el usuario o la contraseña son incorrectos, mostrar un mensaje de error
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
