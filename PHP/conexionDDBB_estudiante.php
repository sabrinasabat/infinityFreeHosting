<?php
    //Parametros de conexión
    $servidor = 'sql108.infinityfree.com';
    $database = 'if0_37620352_escuela';
    $usuario = 'if0_37620352';
    $contrasena = 'swagnabrisa1';

    //Realización de la conexión
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $database); //Me he fijado que se utiliza siempre en
    if(!$conexion){                                                     // esta misma orden, el orden importa?
        die("No fue posible realizar la conexión. ERROR:".mysqli_connect_error()."<br>");
    }// el uso del mysqli_connect_error() es para capturar el texto del error y enseñarlo
?>
