<?php
    include 'conexionDDBB_estudiante.php';

    global $conexion;
    //instrucción de una tabla
    $instruccion = "insert into estudiante values ('52666666F', 'Toni Dot Serra', 23, '2 GM')";

    $res = mysqli_query($conexion, $instruccion);
    if(mysqli_errno($conexion) !=0){
        die ("No fue posible inserir los datos en la tabla");
    } else{
        echo "Datos inseridos";
    }
?>