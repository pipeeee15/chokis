<?php

// CONEXIÓN A LA BASE DE DATOS
// Datos de conexión
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "prueba";

// Conectar a la base de datos
try {
    $conexion = mysqli_connect($host, $user, $pass, $dbname);
} catch (Exception $ex) {
    echo "Error conectando a la base de datos";
    exit();
}
