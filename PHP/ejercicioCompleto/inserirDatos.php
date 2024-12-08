<?php
    include 'conexionBaseDeDatos.php';
    global $conexionDDBB;

    $nombreAdm = 'Administrador';
    $usuarioAdm = 'admin';
    $contrasenaAdm = 'admin';
    $inserirAdm = "INSERT INTO usuarios (nombre, usuario, contrasena) VALUES ('$nombreAdm', '$usuarioAdm', '$contrasenaAdm')";

    if($conexionDDBB->query($inserirAdm)===TRUE){
        echo 'Administrador creado e insertado con succeso.';
    } else {
        echo 'No fue posible insertar el Administrador. '. $conexionDDBB->error;
    }