<?php
// Conexión a la base de datos.
require 'conexion.php';

// Datos que recibo del formulario
$usuario = $_POST["usuario"];
$password = $_POST["password"];

// Consultar la base de datos
$table = 'usuarios';    // Nombre de la tabla
//$query = "SELECT * FROM `$table`";
$query = "SELECT * FROM `$table` WHERE usuario = '$usuario' AND password = '$password'";  // Consulta SQL

$consulta = mysqli_query($conexion, $query);
//$respuesta = mysqli_fetch_all($consulta);
//$respuesta = mysqli_fetch_assoc($consulta);
$filas = mysqli_num_rows($consulta);

// 2 => usuario
// 3 => contraseña
/*foreach ($respuesta as $user) {
    if ($usuario == $user[2] && $password == $user[3]) {
        echo "Vamos al dashboard.";
        exit();
    }
}

echo "No has ingresado.";*/

if ($filas > 0) {
    header('Location: dashboard.php');
} else {
    echo "Los datos son erroneos.";
}