<?php
    include 'conexion.php';
    global $conexion;

    // borrar productos

    $sql = "DELETE FROM productos WHERE id = 27";
    if ($conexion->query($sql) === TRUE) {
        echo "Producto borrado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

