<?php

    $host = 'sql108.infinityfree.com';
    $username = 'if0_37620352';
    $password = 'swagnabrisa1';
    $database = 'if0_37620352_estudiantes';

    $conectar = new mysqli($host, $username, $password, $database);

    if($conectar->connect_error){
        die('Error al conectar'. $conectar->connect_error);
    } else {
        echo 'Conexión exitosa';
    }

?>

