<?php

    include 'conexion_ddbb.php';

    global $conexion;
//Consultar la lista de tareas
    $sql = "SELECT task, status FROM tasks";
    $result = $conexion->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>". htmlspecialchars($row["task"]). "</td>";
            echo "<td>". htmlspecialchars($row["status"]). "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr> <td colspan='2'> No se encontraron tareas</td> </tr>";
    }

//Cerrar la conexión
    $conexion->close();
?>
