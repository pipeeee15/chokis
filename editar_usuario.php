<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuario</title>
</head>
<body>
<h1>Editar usuario</h1>
<?php
// Conexion
require 'conexion.php';
// Consultar la información del usuario que voy a editar
$query = "SELECT * FROM usuarios WHERE id = " . $_GET['xxhh'];
$consulta = mysqli_query($conexion, $query);
$user = mysqli_fetch_assoc($consulta);
?>
<form action="actualizar_usuario.php" method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['xxhh']; ?>">
    <input type="text" name="nombre" value="<?php echo $user['nombre'] ?>"><br>
    <input type="text" name="usuario" value="<?php echo $user['usuario'] ?>"><br>
    <input type="password" name="password" value="<?php echo $user['password'] ?>"><br>
    <input type="submit" value="Guardar">
</form>
</body>
</html>
