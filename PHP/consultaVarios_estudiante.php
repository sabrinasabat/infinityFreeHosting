<?php
    include 'conexionDDBB_estudiante.php';
    global $conexion;

    $instruccion = "select nombre, edad from estudiante";
    $res = mysqli_query($conexion, $instruccion);
    if($res!=null){
        $fila = mysqli_fetch_assoc($res);
        while($fila!=null){
            $nombre = $fila['nombre'];
            $edad = $fila['edad'];
            echo "Nombre: ".$nombre."<br>Edad: ".$edad."<br>";
            $fila = mysqli_fetch_assoc($res);
        }
    }
    mysqli_free_result($res);
    mysqli_close($conexion);


?>
