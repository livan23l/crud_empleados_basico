<?php

include("conexion.php");

$id = $_GET['id'];

$conn = conexion_db();

$sql = "DELETE FROM empleados WHERE id=" . $id . ";";

$conn->exec($sql);

header("Location: ../index.php");