<?php
require "conexion.php";


$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];



$query = "INSERT INTO usuarios (nombre, usuario, password) VALUES ('$nombre', '$usuario', '$password')";

$consulta = mysqli_query($conexion, $query);


if($consulta){
    header("location:/dashboard.php");
}else{
    echo "Error";
}
