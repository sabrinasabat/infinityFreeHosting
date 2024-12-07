<?php
    include 'conectar.php';
    global $conectar;

    $nombre = 'Ana';
    $edad = 20;
    $curso = 'Fisica';

    $inserirRegistro = "INSERT INTO Estudiantes (nombre, edad, curso) VALUES('$nombre', '$edad', '$curso')";

    if($conectar->query($inserirRegistro)===TRUE){
        echo 'Datos inseridos correctamente.';
    } else {
        echo 'No fue posible inserir los datos.';
    }

?>
