<?php
    session_start();
    include 'conexionBaseDeDatos.php';
    global $conexionDDBB;

    if(isset($_GET['id'])){
        $id = intval($_GET['id']); // Converte a entero

        $sqlDelete = "DELETE FROM usuarios WHERE id = $id";

        if($conexionDDBB->query($sqlDelete)===TRUE){
            echo '<p>Usuario eliminado.</p>';
        } else {
            echo '<p>No fue posible eliminar el usuario.</p>' . $conexionDDBB->error;
        }
    }

    echo '<a href="indexAdm.php">Lista de usuarios</a>';


?>
