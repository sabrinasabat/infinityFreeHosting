<?php
    include 'conexionBaseDeDatos.php';
    global $conexionDDBB;

    $inserirAdm = "INSERT INTO usuarios VALUES (nombre = 'Administrador', usuario = 'admin', contrasena = 'admin')";

    if($conexionDDBB->query($inserirAdm)===TRUE){
        echo 'Administrador creado e insertado con succeso.';
    } else {
        echo 'No fue posible insertar el Administrador. '. $conexionDDBB->error;
    }