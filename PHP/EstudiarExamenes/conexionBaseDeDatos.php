<?php

    //Datos de la conexion.
    $host = 'sql108.infinityfree.com';
    $usuario = 'if0_37620352';
    $contrasena = 'swagnabrisa1';
    $nombreDDBB = 'if0_37620352_estudiar_examenes';

    //Creando una conexion, hay que poner EN ESTA ORDEN
    $conexionDDBB = new mysqli($host, $usuario, $contrasena, $nombreDDBB);

    //Verifico la conexion
    if($conexionDDBB->connect_error){
        die("No fue posible conectar a la Base de Datos. Error: ".$conexionDDBB->connect_error);
    }
?>
