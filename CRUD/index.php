<head>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<header>
    <nav>
        <a class="logo"href="index.html"><img src="img/logo.png" width="70%" alt=""></a>
        <ul class="cont-ul">
            <li class="develop">
                Administrador 
                <ul class="ul-second">
                    <li class="back"><a class="barra"href="pag/colabora1.html">Cerrar sesion</li></a>
                </ul>
            </li>
            <li>

            </li>
        </ul>
    </nav>
</header>

<?php
    require_once 'conexion.php';
    // $tabla = $con->query('SELECT * FROM tbl_alumno');
    $tabla = $con->query('SELECT tbl_alumno.id_alum, tbl_alumno.nombre_alum, tbl_alumno.apellidos_alum, tbl_alumno.DNI_alum , tbl_alumno.telf_alum, tbl_alumno.mail_alum , tbl_alumno.fecha_naci_alum, tbl_clase.nombre_clase FROM tbl_alumno INNER JOIN tbl_clase
    ON tbl_alumno.id_clase = tbl_clase.id_clase order by tbl_alumno.id_alum asc;');
    $resultados = $tabla->fetchAll();
?>
<br><br>
<h2>Tabla alumnos</h2>
<a href="profesores.php">Cambiar a la tabla profesores</a>
<a class="crear" href="./formularios/alumnos/formCrear.php">Crear registro</a>
<br><br>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>Teléfono</th>
            <th>Mail</th>
            <th>Fecha nacimiento</th>
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
                echo "<td>" . $fila['telf_alum'] . "</td>";
                echo "<td>" . $fila['mail_alum'] . "</td>";
                echo "<td>" . $fila['fecha_naci_alum'] . "</td>";
                echo "<td>" . $fila['nombre_clase'] . "</td>";
                echo "<td>";
                    echo "<a class='elim' href='./acciones/alumnos/eliminar.php?id=". $fila['id_alum'] . "'>Eliminar</a>";
                    echo "<a href='./formularios/alumnos/formEditar.php?id=" . $fila['id_alum'] . "'>Editar</a>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>