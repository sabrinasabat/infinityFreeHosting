<?php
    include 'conexionDDBB_estudiante.php';
    global $conexion;

    $instruccion = "select nombre from estudiante where Dni = '52666666F'";
    $res = mysqli_query($conexion, $instruccion);
    if(mysqli_errno($conexion) != 0){
        die("No fue posible consultar la tabla");
    } else{
        echo "tabla consultada<br>";
        $fila = mysqli_fetch_assoc($res);
        $campo = 'nombre';
        $dato = $fila['nombre'];
        echo $dato."<br>";
    }

?>
