<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar empleado</title>
</head>

<body>
    <div>
        <h1>CRUD->EDIT.</h1>
        <h2>Barra de navegación</h2>
        <ul> <!-- Unordered list -->
            <li><a href="index.php">Index</a></li>
            <li><a href="crear_empleado.php">Crear</a></li>
        </ul>
    </div>
    <hr />
    <div>
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
        <h3>Formulario edición</h3>
        <form action="controllers/editar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>" />
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" value="<?php echo $nombre; ?>"/>
            <br />
            <br />
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu email" value="<?php echo $correo; ?>">
            <br />
            <br />
            <div>
                <label for="puesto">Ingresa el puesto:</label>
                <br />
                <input type="radio" id="camillero" name="puesto" value="camillero" <?php echo ($puesto=="camillero")?"checked":""; ?> >
                <label for="camillero">Camillero</label>
                <br />
                <input type="radio" id="enfermera" name="puesto" value="enfermera" <?php echo ($puesto=="enfermera")?"checked":""; ?> />
                <label for="enfermera">Enfermera</label>
                <br />
                <input type="radio" id="medico" name="puesto" value="medico" <?php echo ($puesto=="medico")?"checked":""; ?> />
                <label for="medico">Médico</label>
            </div>
            <br />
            <input type="submit" value="Guardar cambios">
        </form>
    </div>
</body>

</html>