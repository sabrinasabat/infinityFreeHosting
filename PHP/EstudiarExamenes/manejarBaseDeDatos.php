<?php
    include 'conexionBaseDeDatos.php';
    global $conexionDDBB;

    //SQL para crear la tabla
    $sentencias = "CREATE TABLE Personas(
    id INT() UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    edad INT(3) NOT NULL,
    email VARCHAR(100) NOT NULL
)";

    if(mysqli_query($conexionDDBB, $sentencias)){
        echo "Tabla creada con succeso.";
    } else {
        echo "Error al crear la tabla." . mysqli_connect_error();
    }


    mysqli_close($conexionDDBB);

?>
