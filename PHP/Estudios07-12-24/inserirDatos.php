<?php
    include 'conectar.php';
    global $conectar;

    $crearTabla = "CREATE TABLE IF NOT EXISTS Estudiantes(
                    nombre VARCHAR(50) NOT NULL PRIMARY KEY,
                    edad INT NOT NULL,
                    curso VARCHAR(50) NOT NULL
)";

    if($conectar->query($crearTabla)===TRUE){
        echo 'Tabla creada con succeso';
    } else {
        echo 'No fue posible crear la tabla.';
    }



?>