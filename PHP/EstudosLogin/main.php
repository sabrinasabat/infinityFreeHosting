<?php
    session_start();
    $usuario = $_SESSION['usuario'];

    echo '<h3>Bienvenido, ' . $usuario. '</h3><br>';
    echo '<a href="logout.php"><button type="button" value="Salir">Salir</button></a>';


?>
