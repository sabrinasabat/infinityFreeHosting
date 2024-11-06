<?php
    include 'conexionDDBB_estudiante.php';
    global $conexion;

    //Modificación de un dato
    $instruccion = "update estudiante set edad = 25 where Dni = '52666666F'";

    $res = mysqli_query($conexion, $instruccion);
    if(mysqli_errno($conexion) != 0){
        die("No fue posible modificar el dato");
    } else {
        echo "Dato modificado.";
    }
    ?>
