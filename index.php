<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>

<body>
    <div>
        <h1>CRUD->INDEX.</h1>
        <h2>Barra de navegación</h2>
        <ul> <!-- Unordered list -->
            <li><a href="index.php">Index</a></li>
            <li><a href="crear_empleado.php">Crear</a></li>
        </ul>
    </div>
    <hr />
    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Puesto</th>
                <th>Opciones</th>
            </tr>
            <?php
            include("controllers/conexion.php");
            $conn = conexion_db();

            $sql = "SELECT * FROM empleados;";

            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach ($stmt->fetchAll() as $registro) {
                echo "<tr>";
                echo "<td> " . $registro['id'] . "</td>";
                echo "<td> " . $registro['nombre'] . "</td>";
                echo "<td> " . $registro['email'] . "</td>";
                echo "<td> " . $registro['puesto'] . "</td>";
                echo "<td> <a href='ver_empleado.php?id=" . $registro['id'] . "'>Ver</a> |
                           <a href='editar_empleado.php?id=" . $registro['id'] . "'>Editar</a> |
                           <a href='controllers/borrar.php?id=" . $registro['id'] . "'>Borrar</a> </td>";
                echo "</tr>";
            }

            ?>
        </table>
    </div>
</body>

</html>