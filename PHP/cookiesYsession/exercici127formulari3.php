<?php
//Recoge los datos enviados en el paso anterior y junto a los que ya estaban en la sesión,se muestran
//todos los datos en una tabla/lista desordenada

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
        <li><b>Aficiones: </b><?php echo htmlspecialchars($_SESSION['aficiones'])?></li>
        <li><b>Convivientes: </b><?php echo htmlspecialchars($_SESSION['convivientes'])?></li>
        <li><b>Nombre Completo:</b> <?php echo htmlspecialchars($_SESSION['nombre'])?></li>
        <li><b>Email: </b><?php echo htmlspecialchars($_SESSION['email']) ?></li>
        <li><b>URL: </b><?php echo htmlspecialchars($_SESSION['url'])?></li>
        <li><b>Sexo: </b><?php echo htmlspecialchars($_SESSION['sexo'])?></li>
    </ul>




</body>
