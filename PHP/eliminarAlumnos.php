<?php
    include 'conexionDDBB_estudiante.php';
    global $conexion;

    $instruccion = "delete from estudiante where Dni = '52666666F'";

    $res = mysqli_query($conexion, $instruccion);
    if(mysqli_errno($conexion) != 0){
        die("No fue posible eliminar el dato"); //¿Cual sería la diferencia entre el die y poner un echo?
    } else{
        echo "Datos eliminados";
    }

?>
