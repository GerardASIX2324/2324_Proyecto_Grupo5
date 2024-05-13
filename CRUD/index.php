<head>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<?php
    require_once 'conexion.php';
    $tabla = $con->query('SELECT * FROM escuelas');
    $tabla->execute();
    $resultados = $tabla->fetchAll();
?>

<h2>Base de datos: Escuelas</h2>
<a href="./formularios/formCrear.php">Crear</a>
<br><br>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre de la escuela</th>
            <th>Número de alumnos</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($resultados as $fila) {
                echo "<tr>";
                echo "<td>" . $fila['id'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $fila['num_alumnos'] . "</td>";
                echo "<td>";
                    echo "<a class='elim' href='./acciones/eliminar.php?id=". $fila['id'] . "'>Eliminar</a>";
                    echo "<a href='./formularios/formEditar.php?id=" . $fila['id'] . "'>Editar</a>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>



