<?php
    $host = 'sql108.infinityfree.com';
    $usuario = 'if0_37620352';
    $contrasena = 'swagnabrisa1';
    $database = 'if0_37620352_proyecto_alumno10';

    $conexion = new mysqli($host, $usuario, $contrasena, $database);

    if($conexion->connect_error){
        die("No fue posible conectar: ".$conexion->connect_error);
    } else {
        echo "Conectado con succeso";
    }