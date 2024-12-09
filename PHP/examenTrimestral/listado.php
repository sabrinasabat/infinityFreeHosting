<?php
    include 'conexion.php';
    global $conexion;

    $sql = "SELECT id, nombre FROM productos";
    $resultado = $conexion -> query($sql);

    if($resultado->num_rows>0){
        while($arrayDeDatos = $resultado->fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$arrayDeDatos['id']. '</td>';
            echo '<td>'.$arrayDeDatos['nombre']. '</td>';
            echo '</tr>';
        }
    }