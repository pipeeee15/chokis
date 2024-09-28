<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestor de venta</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<nav>
    <img class="logo" src="./img/origen-logo-ferrari.webp" alt="Ferrari Logo">
    <a id="ingresar" href="./dashboard.php">inicio</a>
    <a id="ingresar" href="./usuarios.php">Usuarios</a>
    <a id="ingresar" href="./productos.php">Productos</a>
    <a id="ingresar" href="./carrito.php">Carrito</a>
    <a id="ingresar" href="./logout.php">Salir</a>

</nav>

<section id="banner">
    <img src="./img/banner.webp" alt="Ferrari Banner">
</section>
<h3>Lista de usuarios</h3>
<?php
require 'conexion.php';
$query = "SELECT * FROM usuarios";
$consulta = mysqli_query($conexion, $query);
$resultado = mysqli_fetch_all($consulta);
?>
<table border="1">
    <tr>
        <th>It</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Password</th>
        <th>Opciones</th>
    </tr>
    <?php
    foreach ($resultado as $user) {
        ?>
        <tr>
            <td><?php echo $user[0]; ?></td>
            <td><?php echo $user[1]; ?></td>
            <td><?php echo $user[2]; ?></td>
            <td><?php echo $user[3]; ?></td>
            <td>
                <a href="editar_usuario.php?xxhh=<?php echo $user[0]; ?>">Editar</a>
                <a href="eliminar_usuario.php?xxhh=<?php echo $user[0]; ?>">Eliminar</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<h3>Crear usuario</h3>
<form action="guardar_usuario.php" method="post">
    <input type="text" name="nombre" placeholder="Nombre"><br>
    <input type="text" name="usuario" placeholder="Usuario"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" value="Guardar">
</form>
</body>
</html>
