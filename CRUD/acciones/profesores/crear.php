<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {    
     require_once('../../conexion.php');     
     $nombre = $_POST['nombre_prof'];
     $apellidos_prof = $_POST['apellidos_prof'];
     $DNI = $_POST['DNI'];
     $telefono = $_POST['telefono'];
     $mail = $_POST['mail'];
     $id_dept = $_POST['id_dept'];
     $sql = "INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept) VALUES (:nombre, :apellidos_prof, :DNI, :telefono, :mail, :id_dept)";
     $stmt = $con->prepare($sql);
     $stmt->bindParam(':nombre', $nombre);
     $stmt->bindParam(':apellidos_prof', $apellidos_prof);
     $stmt->bindParam(':DNI', $DNI);
     $stmt->bindParam(':telefono', $telefono);
     $stmt->bindParam(':mail', $mail );
     $stmt->bindParam(':id_dept', $id_dept);
     $stmt->execute();
     header('Location: ../../view/profesores.php');
}else{
     header('Location: ../../formularios/profesores/formCrear.php');
     exit(); 
}
?>