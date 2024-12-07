<?php
    include 'conectar.php';
    global $conectar;

    $nombre = 'Ana';
    $novoCurso = 'Quimica';

    $editar = "UPDATE Estudiantes SET curso = '$novoCurso' WHERE nombre = '$nombre'";

    if($conectar->query($editar)===TRUE){
        echo 'Dato cambiado con succeso';
    } else {
        echo 'No fue posible modificar este campo.'.$conectar->error;
    }


?>