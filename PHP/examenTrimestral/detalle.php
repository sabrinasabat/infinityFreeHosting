<?php
    include 'conexion.php';
    global $conexion;

    $sql = "SELECT id, nombre, nombre_corto, descripcion, pvp, familia FROM productos";
    $resultado = $conexion -> query($sql);

    echo '<h1>Detalle del producto</h1>';
    if($resultado->num_rows>0){
        echo '<table border="2px" style="background-color: #d3d3d3">';
        while($arrayDeDatos = $resultado->fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$arrayDeDatos['id']. '</td>';
            echo '<td>'.$arrayDeDatos['nombre']. '</td>';
            echo '<td>'.$arrayDeDatos['nombre_corto']. '</td>';
            echo '<td>'.$arrayDeDatos['descripcion']. '</td>';
            echo '<td>'.$arrayDeDatos['pvp']. '</td>';
            echo '<td>'.$arrayDeDatos['familia']. '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
