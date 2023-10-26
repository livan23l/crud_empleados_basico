<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver empleado</title>
</head>

<body>
    <div>
        <h1>CRUD->VIEW.</h1>
        <h2>Barra de navegación</h2>
        <ul> <!-- Unordered list -->
            <li><a href="index.php">Index</a></li>
            <li><a href="crear_empleado.php">Crear</a></li>
        </ul>
    </div>
    <hr />
    <?php
    include("controllers/conexion.php");
    
    $id = $_GET['id'];

    $conn = conexion_db();

    $sql = "SELECT * FROM empleados WHERE (id = " . $id . ");";


    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $registro = $stmt->fetch(PDO::FETCH_ASSOC);

    $nombre = $registro['nombre'];
    $correo = $registro['email'];
    $puesto = $registro['puesto'];
    

    ?>

    <h3>Vista del empleado: <?php echo $nombre;?>.</h3>
    <p>Id: <?php echo $id;?></p>
    <p>Nombre: <?php echo $nombre;?></p>
    <p>Correo: <?php echo $correo;?></p>
    <p>Puesto: <?php echo $puesto;?></p>
</body>

</html>