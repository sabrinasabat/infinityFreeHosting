<?php

    include 'conexion_ddbb.php';

    global $conexion;
//Consultar la lista de tareas
    $sql = "SELECT task, status FROM tasks";
    $result = $conexion->query($sql);

    if($result->num_rows > 0){
        while($listado = $result->fetch_assoc()){ //Fetch_assoc es una función que retorna como un array, cada llave en una columna
            echo "<tr>";
            echo "<td>". $listado["task"]. "</td>";
            echo "<td>". $listado["status"]. "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr> <td colspan='2'> No se encontraron tareas</td> </tr>";
    }

//Cerrar la conexión
    $conexion->close();
?>
