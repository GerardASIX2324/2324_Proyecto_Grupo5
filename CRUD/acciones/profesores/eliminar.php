<?php
require_once '../../conexion.php';
$codigo = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
if ($codigo) {
    $sql = "DELETE FROM tbl_profesor WHERE id_prof = :id";
    $sentencia = $con->prepare($sql);
    $sentencia->bindParam(':id', $codigo);
    $sentencia->execute();
    header('Location: ../../profesores.php');
}
?>