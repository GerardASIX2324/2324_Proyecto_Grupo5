<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../index.php?error=1');
    exit;
}
?>
<html>
<head>
    <link rel="stylesheet" href="./../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<header>
    <nav>
        <img src="../img/logo.png" class="logo" alt="">
        <ul class="cont-ul">
            
            <li class="develop">
                Administrador 
                <ul class="ul-second">
                    <li class="letra"><a class="barra" href="../proc/logout.php">Cerrar sesión</li></a>
                </ul>
            </li>
            <li class="invi"></li></li class="invi"></li><li class="invi"></li><li class="invi"></li><li class="invi"></li>
        </ul>
    </nav>
</header>

<body>
<br><br>
    <h2>Tabla alumnos</h2>
    <br>
    <form class="buscador">
    <?php
        require_once '../conexion.php';
            if (isset($_GET['filtro'])){
                $filtro = $_GET['filtro'];
                // Prepara la consulta SQL para la búsqueda
                $consulta = $con->prepare("
                    SELECT tbl_alumno.id_alum, tbl_alumno.nombre_alum, tbl_alumno.apellidos_alum, tbl_alumno.DNI_alum , tbl_alumno.telf_alum, tbl_alumno.mail_alum , tbl_alumno.fecha_naci_alum, tbl_clase.nombre_clase 
                    FROM tbl_alumno 
                    INNER JOIN tbl_clase
                    ON tbl_alumno.id_clase = tbl_clase.id_clase
                    WHERE id_alum LIKE :filtro 
                    OR nombre_alum LIKE :filtro 
                    OR apellidos_alum LIKE :filtro 
                    OR DNI_alum LIKE :filtro 
                    OR telf_alum LIKE :filtro 
                    OR mail_alum LIKE :filtro 
                    OR nombre_clase LIKE :filtro
                "); 
                $consulta->execute([':filtro' => '%' . $filtro . '%']);
                $resultados = $consulta->fetchAll();
    
                echo '<a class="color" href="./alumnos.php">Volver a ver todos los registros</a>';

            } else {
                $tabla = $con->query('SELECT tbl_alumno.id_alum, tbl_alumno.nombre_alum, tbl_alumno.apellidos_alum, tbl_alumno.DNI_alum , tbl_alumno.telf_alum, tbl_alumno.mail_alum , tbl_alumno.fecha_naci_alum, tbl_clase.nombre_clase 
                FROM tbl_alumno 
                INNER JOIN tbl_clase
                ON tbl_alumno.id_clase = tbl_clase.id_clase order by tbl_alumno.id_alum asc;');
                $resultados = $tabla->fetchAll();
            }
    ?>
        <input class="buscar" type="search" name="filtro" placeholder="Buscar" aria-label="Buscar"><br>
        <button class="boton_enviar" type="submit">Buscar</button>
    </form>
    <a href="profesores.php">Cambiar a la tabla profesores</a>
    <a class="crear" href="./../formularios/alumnos/formCrear.php">Crear registro</a>

    <br><br>
    <?php
        $countQuery = $con->query('SELECT COUNT(id_alum) as total FROM tbl_alumno');
        $countResult = $countQuery->fetch();
        $totalAlumnos = $countResult['total'];
    ?>
    <h4 class="resultados">Total de alumnos: <?php echo $totalAlumnos; ?></h4><br>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>DNI</th>
                <th class="ocultar">Teléfono</th>
                <th class="ocultar">Mail</th>
                <th class="ocultar">Fecha nacimiento</th>
                <th>Clase</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            <?php

                foreach ($resultados as $fila) {
                    echo "<tr>";
                    echo "<td>" . $fila['id_alum'] . "</td>";
                    echo "<td>" . $fila['nombre_alum'] . "</td>";
                    echo "<td>" . $fila['apellidos_alum'] . "</td>";
                    echo "<td>" . $fila['DNI_alum'] . "</td>";
                    echo "<td class='ocultar'>" . $fila['telf_alum'] . "</td>";
                    echo "<td class='ocultar' >" . $fila['mail_alum'] . "</td>";
                    echo "<td class='ocultar'>" . $fila['fecha_naci_alum'] . "</td>";
                    echo "<td>" . $fila['nombre_clase'] . "</td>";
                    echo "<td>";
                        echo "<a class='elim' href='./../acciones/alumnos/eliminar.php?id=". $fila['id_alum'] . "'>Eliminar</a>";
                        echo "<a class='boton1' href='./../formularios/alumnos/formEditar.php?id=" . $fila['id_alum'] . "'>Editar</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>