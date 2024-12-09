<?php
    //Datos de la conexion
    $host = 'sql108.infinityfree.com';
    $dbname = 'if0_37620352_proyecto_alumno10';
    $user = 'if0_37620352';
    $password = 'swagnabrisa1';

    $conexionDDBB = new mysqli($host, $dbname, $user, $password);

    if($conexionDDBB->connect_error){
        echo 'No fue posible conectar a la base de datos'. $conexionDDBB->connect_error;
    } else {
        echo 'Conectado a la base de datos.';
    }

?>
