<?php

    include 'conectar.php';
    global $conectar;

    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
    }

    $sentenciaSql = "DELETE FROM Estudiantes WHERE nombre = '$nombre'";

    if($conectar->query($sentenciaSql)===TRUE){
        echo '<p>'. $nombre . ' fue deletado(a) de nuestra base de datos</p>';
    } else {
        echo 'No fue posible deletar de nuestra base de datos.' . $conectar->error;
    }