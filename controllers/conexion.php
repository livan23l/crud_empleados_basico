<?php

function conexion_db() {
    $server = "localhost";
    $db = "hospital";
    $port = "3306";
    $user = "root";
    $pass = "";
    try {
        $conn = new PDO("mysql:host=$server; port=$port; dbname=$db", $user, $pass);
    } catch(Exception $e) {
        echo $e->getMessage();
        exit;
    }
    return $conn;
}