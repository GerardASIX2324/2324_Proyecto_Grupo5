<?php
require_once '../../conexion.php';

$id = $_REQUEST['id_alum'];
$nombre = $_REQUEST['nombre_alum'];
$apellidos_alum = $_REQUEST['apellidos_alum'];
$DNI = $_REQUEST['DNI'];
$telefono = $_REQUEST['telefono'];
$mail = $_REQUEST['mail'];
$fecha = $_REQUEST['fecha'];
$clase = $_REQUEST['clase'];

if (isset($id)) {

    $sql = "UPDATE tbl_alumno SET nombre_alum = :nombre, apellidos_alum = :apellidos_alum, DNI_alum = :DNI, telf_alum = :telefono, mail_alum = :mail, fecha_naci_alum = :fecha, id_clase = :clase WHERE id_alum = :id";

    // Prepare and execute the SQL statement
    $sentencia = $con->prepare($sql);
    $sentencia->bindParam(':id', $id);
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':apellidos_alum', $apellidos_alum);
    $sentencia->bindParam(':DNI', $DNI);
    $sentencia->bindParam(':telefono', $telefono);
    $sentencia->bindParam(':mail', $mail);
    $sentencia->bindParam(':fecha', $fecha);
    $sentencia->bindParam(':clase', $clase);
    $sentencia->execute();

    header('Location: ../../index.php');
}
?>
