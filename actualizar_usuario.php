<?php
require "conexion.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$query = "UPDATE usuarios SET nombre = '$nombre', usuario = '$usuario', password = '$password' WHERE id = ". $id;

$consulta = mysqli_query($conexion, $query);


if($consulta){
    header("location:/dashboard.php");
}else{
    echo "Error";
}
