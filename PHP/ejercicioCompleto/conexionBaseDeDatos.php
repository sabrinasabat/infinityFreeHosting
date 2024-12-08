<?php
    $host = 'sql108.infinityfree.com';
    $username = 'if0_37620352';
    $password = 'swagnabrisa1';
    $nombreDDBB = 'if0_37620352_logins';

    $conexionDDBB = new mysqli($host, $username, $password, $nombreDDBB);

    if($conexionDDBB->connect_error){
        die('No fue posible conectar a la base de datos'. $conexionDDBB->connect_error);
    } else {
        echo 'Conectado a la base de datos';
    }

?>
