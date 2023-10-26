<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear empleado</title>
</head>

<body>
    <div>
        <h1>CRUD->CREATE.</h1>
        <h2>Barra de navegación</h2>
        <ul> <!-- Unordered list -->
            <li><a href="index.php">Index</a></li>
            <li><a href="crear_empleado.php">Crear</a></li>
        </ul>
    </div>

    <hr />

    <div>
        <h3>Formulario para crear empleados</h3>
        <form action="controllers/store.php" method="POST">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" />
            <br />
            <br />
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu email">
            <br />
            <br />
            <div>
                <label for="puesto">Ingresa el puesto:</label>
                <br />
                <input type="radio" id="camillero" name="puesto" value="camillero">
                <label for="camillero">Camillero</label>
                <br />
                <input type="radio" id="enfermera" name="puesto" value="enfermera">
                <label for="enfermera">Enfermera</label>
                <br />
                <input type="radio" id="medico" name="puesto" value="medico">
                <label for="medico">Médico</label>
            </div>
            <br />
            <input type="submit" value="Enviar formulario">
        </form>
    </div>
</body>

</html>