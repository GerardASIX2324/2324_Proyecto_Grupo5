<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {    
     require_once('../../conexion.php');     
     $nombre = $_POST['nombre_alum'];
     $apellidos_alum = $_POST['apellidos_alum'];
     $DNI = $_POST['DNI'];
     $telefono = $_POST['telefono'];
     $mail = $_POST['mail'];
     $fecha = $_POST['fecha'];
     $id_clase = $_POST['id_clase'];
     $sql = "INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase) VALUES (:nombre, :apellidos_alum, :DNI, :telefono, :mail, :fecha, :id_clase)";
     $stmt = $con->prepare($sql);
     $stmt->bindParam(':nombre', $nombre);
     $stmt->bindParam(':apellidos_alum', $apellidos_alum);
     $stmt->bindParam(':DNI', $DNI);
     $stmt->bindParam(':telefono', $telefono);
     $stmt->bindParam(':mail', $mail );
     $stmt->bindParam(':fecha', $fecha);
     $stmt->bindParam(':id_clase', $id_clase);
     $stmt->execute();
     header('Location: ../../view/alumnos.php');
}
?>