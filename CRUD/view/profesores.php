<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../index.php?error=1');
    exit;
}
?>
<head>
    <link rel="stylesheet" href="./../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<?php
    require_once '../conexion.php';
    
    $tabla = $con->query('SELECT tbl_profesor.id_prof, tbl_profesor.nombre_prof, tbl_profesor.apellidos_prof, tbl_profesor.DNI_prof, tbl_profesor.telf_prof, tbl_profesor.mail_prof, tbl_departamento.nombre_dept 
    FROM tbl_profesor 
    INNER JOIN tbl_departamento ON tbl_profesor.id_dept = tbl_departamento.id_dept ORDER BY tbl_profesor.id_prof ASC');

    $resultados = $tabla->fetchAll();
?>


<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->









<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->


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
<br><br>
<h2>Tabla profesores</h2><br>
<form class="buscador">
            <?php
                    require_once '../conexion.php';
                        if (isset($_GET['filtro'])){
                            $filtro = $_GET['filtro'];
                            // Prepara la consulta SQL para la búsqueda
                            $consulta = $con->prepare("
                            SELECT tbl_profesor.id_prof, tbl_profesor.nombre_prof, tbl_profesor.apellidos_prof, tbl_profesor.DNI_prof, tbl_profesor.telf_prof, tbl_profesor.mail_prof, tbl_departamento.nombre_dept 
                            FROM tbl_profesor 
                            INNER JOIN tbl_departamento 
                            ON tbl_profesor.id_dept = tbl_departamento.id_dept
                                WHERE id_prof LIKE :filtro 
                                OR nombre_prof LIKE :filtro 
                                OR apellidos_prof LIKE :filtro 
                                OR DNI_prof LIKE :filtro 
                                OR telf_prof LIKE :filtro 
                                OR mail_prof LIKE :filtro 
                                OR nombre_dept LIKE :filtro
                            "); 
                            $consulta->execute([':filtro' => '%' . $filtro . '%']);
                            $resultados = $consulta->fetchAll();
                            echo '<a class="color" href="./profesores.php">Volver a ver todos los registros</a>';

                        } else {
                            $tabla = $con->query('SELECT tbl_profesor.id_prof, tbl_profesor.nombre_prof, tbl_profesor.apellidos_prof, tbl_profesor.DNI_prof, tbl_profesor.telf_prof, tbl_profesor.mail_prof, tbl_departamento.nombre_dept 
                            FROM tbl_profesor 
                            INNER JOIN tbl_departamento ON tbl_profesor.id_dept = tbl_departamento.id_dept 
                            ORDER BY tbl_profesor.id_prof ASC');

                            $resultados = $tabla->fetchAll();
                        }
            ?>
        <input class="buscar" type="search" name="filtro" placeholder="Buscar" aria-label="Buscar"><br>
        <button class="boton_enviar" type="submit">Buscar</button>
</form>


<a href="alumnos.php">Cambiar a la tabla alumnos</a>
<a class="crear" href="./../formularios/profesores/formCrear.php">Crear registro</a>
<br><br>
    <?php
            $countQuery = $con->query('SELECT COUNT(id_prof) as total FROM tbl_profesor');
            $countResult = $countQuery->fetch();
            $totalProfesor = $countResult['total'];
        ?>
        <h4 class="resultados">Total de profesores: <?php echo $totalProfesor; ?></h4>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th class="ocultar">Teléfono</th>
                    <th class="ocultar">Mail</th>
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
                        echo "<td class='ocultar'>" . $fila['telf_prof'] . "</td>";
                        echo "<td class='ocultar'>" . $fila['mail_prof'] . "</td>";
                        echo "<td>" . $fila['nombre_dept'] . "</td>";
                        echo "<td>";
                            echo "<a class='elim' href='./../acciones/profesores/eliminar.php?id=". $fila['id_prof'] . "'>Eliminar</a>";
                            echo "<a href='../formularios/profesores/formEditar.php?id=" . $fila['id_prof'] . "'>Editar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
    </table>
</body>
</html>