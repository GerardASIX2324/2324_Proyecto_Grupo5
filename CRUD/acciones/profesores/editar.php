<?php
require_once '../../conexion.php';

$id = $_REQUEST['id_prof'];
$nombre = $_REQUEST['nombre_prof'];
$apellidos_prof = $_REQUEST['apellidos_prof'];
$DNI = $_REQUEST['DNI'];
$telefono = $_REQUEST['telefono'];
$mail = $_REQUEST['mail'];
$id_dept = $_REQUEST['id_dept'];


if (isset($id)) {

    $sql = "UPDATE tbl_profesor SET nombre_prof = :nombre, apellidos_prof = :apellidos_prof, DNI_prof = :DNI, telf_prof = :telefono, mail_prof = :mail, id_dept = :id_dept WHERE id_prof = :id";

    
    $sentencia = $con->prepare($sql);
    $sentencia->bindParam(':id', $id);
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':apellidos_prof', $apellidos_prof);
    $sentencia->bindParam(':DNI', $DNI);
    $sentencia->bindParam(':telefono', $telefono);
    $sentencia->bindParam(':mail', $mail);
    $sentencia->bindParam(':id_dept', $id_dept);
    $sentencia->execute();

    header('Location: ../../view/profesores.php');
}
?>
