<?php

//Datos de la conexión:
    $host = 'sql108.infinityfree.com';
    $dbname = 'if0_37620352_prova';
    $username = 'if0_37620352';
    $password = 'swagnabrisa1';

//Crear una nueva conexión:
    $conexionDDBB = new mysqli($host, $username, $password, $dbname);

//Verificar la conexión:
    if($conexionDDBB->connect_error){
        die("No fue posible conectar: ".$conexionDDBB->connect_error);
    }
    echo "Conexión exitosa";

?>
