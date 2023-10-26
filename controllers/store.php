<?php
include("conexion.php");

$conn = conexion_db();


$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "NA";
$email = isset($_POST['email']) ? $_POST['email'] : "NA";
$puesto = isset($_POST['puesto']) ? $_POST['puesto'] : "NA";

$sql = "INSERT INTO empleados (nombre, email, puesto) VALUES ('" . $nombre . "', '" . $email . "', '" . $puesto . "');";

$conn->exec($sql);

header("Location: ../index.php");