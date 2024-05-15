<head>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<?php
    require_once 'conexion.php';
    
    $tabla = $con->query('SELECT tbl_profesor.id_prof, tbl_profesor.nombre_prof, tbl_profesor.apellidos_prof, tbl_profesor.DNI_prof, tbl_profesor.telf_prof, tbl_profesor.mail_prof, tbl_departamento.nombre_dept FROM tbl_profesor INNER JOIN tbl_departamento ON tbl_profesor.id_dept = tbl_departamento.id_dept ORDER BY tbl_profesor.id_prof ASC');

    $resultados = $tabla->fetchAll();
?>
<header>
    <nav>
        <img src="img/logo.png" width="7%" alt="">
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
<br><br>
<h2>Tabla profesores</h2>
<a href="alumnos.php">Cambiar a la tabla alumnos</a>
<a class="crear" href="./formularios/profesores/formCrear.php">Crear registro</a>
<br><br>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>Telefono</th>
            <th>Mail</th>
            <th>Departamento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($resultados as $fila) {
                echo "<tr>";
                echo "<td>" . $fila['id_prof'] . "</td>";
                echo "<td>" . $fila['nombre_prof'] . "</td>";
                echo "<td>" . $fila['apellidos_prof'] . "</td>";
                echo "<td>" . $fila['DNI_prof'] . "</td>";
                echo "<td>" . $fila['telf_prof'] . "</td>";
                echo "<td>" . $fila['mail_prof'] . "</td>";
                echo "<td>" . $fila['nombre_dept'] . "</td>";
                echo "<td>";
                    echo "<a class='elim' href='./acciones/profesores/eliminar.php?id=". $fila['id_prof'] . "'>Eliminar</a>";
                    echo "<a href='./formularios/profesores/formEditar.php?id=" . $fila['id_prof'] . "'>Editar</a>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>