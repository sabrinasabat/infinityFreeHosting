<?php

//Datos de la conexion
    $host = 'sql108.infinityfree.com';
    $dbname = 'if0_37620352_todolist';
    $user = 'if0_37620352';
    $password = 'swagnabrisa1';

//Crear una nueva conexión:
    $conexion = new mysqli($host, $user, $password, $dbname);

//Verificar la conexión:
    if($conexion->connect_error){
        die("No fue posible conectar: ".$conexion->connect_error);
    }

?>
