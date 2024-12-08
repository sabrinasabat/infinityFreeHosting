<?php
    session_start();

    echo '<h1>Bienvenido, '.$_SESSION['usuario'].'.';


    echo '<a href="logout.php">Cerrar sessión</a>';
?>

