<?php
    session_start();
    if(isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];

        echo '<h1>Bienvenido, ' . $usuario . '</h1>';

        $alquiler = ["mmaria" => ["Peliculas", "Series"],
            "juan" => ["Juegos", "Series"]
        ];

        if(isset($alquiler[$usuario])){
            echo '<p> Tienes alquilado:</p>';
            foreach($alquiler[$usuario] as $iten){
                echo '<ul>';
                echo '<li>'.$iten.'</li>';
                echo '</ul>';
            }
        } else {
            echo '<p>'.$usuario. ' No tiene nada alquilado </p>.';
        }

        echo '<a href="logout.php">Encerrar Cessión</a>';
    }
?>