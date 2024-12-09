<?php
    include 'conexion.php';
    global $conexion;

    $sql = "SELECT id, nombre FROM productos";
    $resultado = $conexion -> query($sql);

    if($resultado->num_rows>0){
        while($arrayDeDatos = $resultado->fetch_assoc()){
            echo '<table border="2px">';
            echo '<tr>';
            echo '<th>Detalle</th>';
            echo '<th>Código</th>';
            echo '<th>Nombre</th>';
            echo '<th>Acciones</th>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Detalle</td>';
            echo '<td>'.$arrayDeDatos['id']. '</td>';
            echo '<td>'.$arrayDeDatos['nombre']. '</td>';
            echo '<td>Acciones</td>';
            echo '</tr>';
            echo '</table>';
        }
    }