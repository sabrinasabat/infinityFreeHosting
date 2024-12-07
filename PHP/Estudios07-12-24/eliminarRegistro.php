<?php
    include 'conectar.php';
    global $conectar;

    $nombre = 'Ana';
    $eliminarRegistro = "DELETE FROM Estudiantes WHERE nombre = '$nombre'";

    if($conectar->query($eliminarRegistro)===TRUE){
        echo 'Registro eliminado con succeso.';
    } else {
        echo 'No fue posible eliminar el registro.' . $conectar->error;
    }


?>