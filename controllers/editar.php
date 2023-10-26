<?php

include("conexion.php");

$id = $_POST['id'];
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "NA";
$email = isset($_POST['email']) ? $_POST['email'] : "NA";
$puesto = isset($_POST['puesto']) ? $_POST['puesto'] : "NA";

$conn = conexion_db();

$sql = "UPDATE empleados
        SET nombre='" . $nombre . "',
            email='" . $email . "',
            puesto='" . $puesto . "'
        WHERE id=" . $id . ";";

$conn->exec($sql);

header("Location: ../index.php");