<?php
require_once '../conexion.php';
$nombre = $_POST['nombre'];
$num_alu = $_POST['alumnos'];
$sql = "INSERT INTO escuelas (nombre, num_alumnos) VALUES (:Nombre, :Numero_alumnos)";
$stmt = $con->prepare($sql);
$stmt->bindParam(':Nombre', $nombre);
$stmt->bindParam(':Numero_alumnos', $num_alu);
$stmt->execute();
header('Location: ../index.php');
?>