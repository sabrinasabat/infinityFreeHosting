<?php

   /* if(isset($_GET['enviar'])){
        $nombre = $_GET['nombre'];
        $edade = $_GET['edade'];
        $curso = $_GET['curso'];

        echo 'Nombre: '. $nombre. '<br>';
        echo 'Edad: '. $edade . '<br>';
        echo 'Curso: '. $curso . '<br>';
    } else {
        echo 'No fue posible acceder a los datos introducidos';
    }*/

    if(isset($_GET['nombre']) && isset($_GET['edade']) && isset($_GET['curso'])){
        $nombre = $_GET['nombre'];
        $edade = $_GET['edade'];
        $curso = $_GET['curso'];

        echo 'Nombre: '. $nombre. '<br>';
        echo 'Edad: '. $edade . '<br>';
        echo 'Curso: '. $curso . '<br>';
    } else {
        echo 'No fue posible acceder a los datos introducidos';
    }

?>