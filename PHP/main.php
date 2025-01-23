<?php
    //Recuperamos la información de la sesión
    if(!isset($_SESSION)){
        session_start();
    }

    //Y Comprobamos que el usuario se haya autentificado
    if(!isset($_SESSION['usuario'])){
        die("Error - debe <a href='indexUT4.php'>identificarse</a>.<br>");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado de Productos</title>
</head>
<body>
    <h1>Bienvenido <?= $_SESSION['usuario'] ?></h1>
    <p>Pulse <a href="logout.php">aquí</a> para salir</p>
    <p>Volver al <a href="main.php">Inicio</a></p>
    <h2>Listado de productos</h2>
    <ul>
        <li>Producto 1</li>
        <li>Producto 2</li>
        <li>Producto 3</li>
    </ul>
</body>
</html>
