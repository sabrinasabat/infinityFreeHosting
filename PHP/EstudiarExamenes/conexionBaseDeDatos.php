<?php

    //Datos de la conexion
    $host = 'sql108.infinityfree.com';
    $nombreDDBB = 'if0_37620352_estudiar_examenes';
    $usuario = 'if0_37620352';
    $contrasena = 'swagnabrisa1';

    //Creando una conexion
    $conexionDDBB = new mysqli($host, $nombreDDBB, $usuario, $contrasena);

    //Verifico la conexion
    if($conexionDDBB->connect_error){
        die("No fue posible conectar a la Base de Datos. Error: ".$conexionDDBB->connect_error);
    }
?>
