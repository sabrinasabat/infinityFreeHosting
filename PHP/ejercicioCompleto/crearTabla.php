<?php
    include 'conexionBaseDeDatos.php';
    global $conexionDDBB;

    $crearTabla = "CREATE TABLE IF NOT EXISTS usuarios(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    nombre VARCHAR(50),
                    usuario VARCHAR(50) UNIQUE,
                    contrasena VARCHAR(50))";

    if($conexionDDBB->query($crearTabla)===TRUE){
        echo 'Tabla creada con succeso';
    } else {
        echo 'No fue posible crear la tabla.' . $conexionDDBB->error;
    }