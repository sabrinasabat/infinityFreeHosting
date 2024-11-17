<?php
//Recoge los datos enviados en el paso anterior y junto a los que ya estaban en la sesión,se muestran
//todos los datos en una tabla/lista desordenada

    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_SESSION['convivientes'] = $_POST['convivientes'];
        $_SESSION['aficiones'] = $_POST['aficiones'];
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Datos</title>
    </head>
    <body>
    <ul>
        <?php
        if (isset($_SESSION['nombre'])) {
            echo "<li><b>Nombre Completo:</b> " . htmlspecialchars($_SESSION['nombre']) . "</li>";
        }
        if (isset($_SESSION['email'])) {
            echo "<li><b>Email:</b> " . htmlspecialchars($_SESSION['email']) . "</li>";
        }
        if (isset($_SESSION['url'])) {
            echo "<li><b>URL:</b> " . htmlspecialchars($_SESSION['url']) . "</li>";
        }
        if (isset($_SESSION['sexo'])) {
            echo "<li><b>Sexo:</b> " . htmlspecialchars($_SESSION['sexo']) . "</li>";
        }
        ?>
        <li><b>Aficiones:</b> <?php echo htmlspecialchars($_SESSION['aficiones']); ?></li>
        <li><b>Convivientes:</b> <?php echo htmlspecialchars($_SESSION['convivientes']); ?></li>
    </ul>
    </body>
</html>
