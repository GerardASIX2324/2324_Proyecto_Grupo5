<?php
require_once '../conexion.php';
$codigo = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
if ($codigo) {
    $sql = "DELETE FROM escuelas WHERE id = :id";
    $sentencia = $con->prepare($sql);
    $sentencia->bindParam(':id', $codigo);
    $sentencia->execute();
    header('Location: ../index.php');
}
?>