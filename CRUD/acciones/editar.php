<?php
require_once '../conexion.php';
$codigo = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
$id = $_REQUEST['id'];
$nombre = $_REQUEST['nombre'];
$num_alumnos = $_REQUEST['num_alu'];
$lugar = $_REQUEST['lugar'];
if (isset($codigo)) {
    $sql = "UPDATE escuelas SET nombre = :nombre, num_alumnos = :num_alumnos WHERE id = :id";
    $sentencia = $con->prepare($sql);
    $sentencia->bindParam(':id', $id);
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':num_alumnos', $num_alumnos);
    $sentencia->execute();
    header('Location: ../index.php');
}
?>