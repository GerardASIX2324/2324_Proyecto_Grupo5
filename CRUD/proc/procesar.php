<?php
session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if ($usuario === "admin" && $contrasena === "12345aA") {
    $_SESSION['loggedin'] = true;
    $_SESSION['usuario'] = $usuario;
    header('Location: ../view/alumnos.php');
    exit;
} else {
    header('Location: ../index.php?error=1');
    exit;
}
?>
