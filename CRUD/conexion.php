<?php
    $host = "localhost";
    $nombreBD = "bd_escuela_proyecto";
    $userBD = "root";
    $passBD = "qazQAZ123";
    try {
        $con = new PDO('mysql:host=localhost;dbname=bd_escuela_proyecto', $userBD, $passBD);
    } catch(PDOException $e) {
        echo "<p>Error de conexión: </p>" . $e->getMessage();
    }
?>