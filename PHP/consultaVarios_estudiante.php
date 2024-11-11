<?php
    include 'conexionDDBB_estudiante.php';
    global $conexion;

    $instruccion = "select Dni, Nombre, Edad, Ciclo  from estudiante";
    $res = mysqli_query($conexion, $instruccion);
    if($res!=null){
        $fila = mysqli_fetch_assoc($res);
        while($fila!=null){
            $dni = $fila['Dni'];
            $nombre = $fila['nombre'];
            $edad = $fila['edad'];
            $ciclo = $fila['ciclo'];


            echo "<tr>";
            echo "<td>".$dni."</td>";
            echo "<td>".$nombre."</td>";
            echo "<td>".$edad."</td>";
            echo "<td>".$ciclo."</td>";
            //echo "Nombre: ".$nombre."<br>Edad: ".$edad."<br>";
            $fila = mysqli_fetch_assoc($res);

        }
    }
    mysqli_free_result($res);
    mysqli_close($conexion);


?>
