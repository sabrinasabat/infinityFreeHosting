<?php
    if (isset($_SERVER['HTTP_REFERER'])) {
        $referer = $_SERVER['HTTP_REFERER'];
        //header("Location: juegoBola8.php");
        //exit;
        echo 'El HTTP_REFERER es: ' . $referer;
    } else{
        echo 'Acceso denegado. No tienes permiso para acceder al juego';
    }

?>
