<?php
    include 'conexion.php';
    global $conexion;

    $sql = "SELECT id, nombre FROM productos";
    $resultado = $conexion -> query($sql);

    if($resultado->num_rows>0){
        echo '<table border="2px">';
        echo '<tr>';
        echo '<th>Detalle</th>';
        echo '<th>Código</th>';
        echo '<th>Nombre</th>';
        echo '<th>Acciones</th>';
        echo '</tr>';
        while($arrayDeDatos = $resultado->fetch_assoc()){
            echo '<tr>';
            echo '<td><a href="detalle.php"><button type="button">Detalle</button></a> </td>';
            echo '<td>'.$arrayDeDatos['id']. '</td>';
            echo '<td>'.$arrayDeDatos['nombre']. '</td>';
            echo '<td><a href="update.php"><button type="button">Actualizar</button></a> <a href="borrar.php"><button type="button">Borrar</button> </a> </td>';
            echo '</tr>';
        }
        echo '</table>';
    }