<?php
require_once '../../conexion.php';
$codigo = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
if ($codigo) {
    $sql = "DELETE FROM tbl_alumno WHERE id_alum = :id";
    $sentencia = $con->prepare($sql);
    $sentencia->bindParam(':id', $codigo);
    $sentencia->execute();
    header('Location: ../../index.php');
}
?>