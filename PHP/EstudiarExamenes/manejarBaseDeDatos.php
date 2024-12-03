<?php
    include 'conexionBaseDeDatos.php';
    global $conexionDDBB;

    //SQL para crear la tabla
    $sentencias = "CREATE TABLE IF NOT EXISTS Personas(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    edad INT NOT NULL,
    email VARCHAR(100) NOT NULL
)";

    if($conexionDDBB->query($sentencias)===TRUE){
        echo "Tabla creada con succeso.";
    } else {
        echo "Error al crear la tabla." . $conexionDDBB ->error;
    }

    $conexionDDBB->close();

?>
