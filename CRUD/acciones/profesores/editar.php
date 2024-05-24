<?php
require_once '../../conexion.php';

if(isset($_REQUEST['id_alum']) && isset($_REQUEST['nombre_alum']) && isset($_REQUEST['apellidos_alum']) && isset($_REQUEST['DNI']) && isset($_REQUEST['telefono']) && isset($_REQUEST['mail'])&& isset($_REQUEST['fecha']) && isset($_REQUEST['clase']) ){
    $id = $_REQUEST['id_alum'];
    $nombre = $_REQUEST['nombre_alum'];
    $apellidos_alum = $_REQUEST['apellidos_alum'];
    $DNI = $_REQUEST['DNI'];
    $telefono = $_REQUEST['telefono'];
    $mail = $_REQUEST['mail'];
    $fecha = $_REQUEST['fecha'];
    $clase = $_REQUEST['clase'];
    
}


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
