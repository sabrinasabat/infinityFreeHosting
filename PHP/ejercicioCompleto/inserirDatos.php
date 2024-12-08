<?php
    include 'conexionBaseDeDatos.php';
    global $conexionDDBB;

    $inserirAdm = "INSERT nombre, usuario, contrasena INTO usuarios VALUES ('Administrador', 'admin', 'admin')";

    if($conexionDDBB->query($inserirAdm)===TRUE){
        echo 'Administrador creado e insertado con succeso.';
    } else {
        echo 'No fue posible insertar el Administrador. '. $conexionDDBB->error;
    }