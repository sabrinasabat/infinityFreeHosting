<?php

//Datos de la conexión:
    $host = 'sql108.infinityfree.com';
    $dbname = 'if0_37620352_prova';
    $username = 'if0_37620352';
    $password = 'swagnabrisa1';

//Crear una nueva conexión:
    $conn = new mysqli($host, $username, $password, $dbname);

//Verificar la conexión:
    if($conn->connect_error){
        die("No fue posible conectar: ".$conn->connect_error);
    }
    echo "Conexión exitosa";

    $conn->close();

?>
