<?php
    include 'conexionBaseDeDatos.php';
    global $conexionDDBB;
    $sentencias = "SELECT * FROM Personas";
    $resultado = $conexionDDBB -> query($sentencias);

    if($resultado->num_rows>0){
        while($arrayDeDatos = $resultado->fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$arrayDeDatos['id']. '</td>';
            echo '<td>'.$arrayDeDatos['nombre']. '</td>';
            echo '<td>'. $arrayDeDatos['apellido']. '</td>';
            echo '<td>'. $arrayDeDatos['edad']. '</td>';
            echo '<td>'. $arrayDeDatos['email'].'</td>';
            echo '</tr>';
        }
    }

    $conexionDDBB->close();

?>
