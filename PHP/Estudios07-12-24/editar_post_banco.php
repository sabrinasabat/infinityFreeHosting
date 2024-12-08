<?php
    include 'conectar.php';
    global $conectar;

    if(isset($_POST['nombre']) && isset($_POST['curso'])){
        $nombre = $_POST['nombre'];
        $curso = $_POST['curso'];
    }

    $sentenciaSql = "UPDATE Estudiantes SET curso='$curso' WHERE nombre = '$nombre'";

    if($conectar->query($sentenciaSql)===TRUE){
        echo '<p> Curso de '.$nombre.'editado con succeso';
    } else {
        echo 'Error al editar Curso: '. $conectar->error;
    }

