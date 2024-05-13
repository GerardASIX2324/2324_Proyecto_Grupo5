<?php
    $host = "localhost";
    $nombreBD = "escuelas";
    $userBD = "root";
    $passBD = "qazQAZ123";
    try {
        $con = new PDO('mysql:host=localhost;dbname=escuelas', $userBD, $passBD);
    } catch(PDOException $e) {
        echo "<p>Error de conexión: </p>" . $e->getMessage();
    }
?>