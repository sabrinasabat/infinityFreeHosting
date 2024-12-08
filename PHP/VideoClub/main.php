<?php
    session_start();
    /*if(!isset($_SERVER['usuario'])){
        header("Location: login.php");
        exit();
    }*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <tittle>Login</tittle>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h1>
    <table border="1" >
        <h2>Listado de Clientes</h2>


    </table>
    <table>
        <h2>Listado de Soporte</h2>
    </table>


    <p><a href="logout.php">Cerrar sesión</a></p>
</body>

</html>
