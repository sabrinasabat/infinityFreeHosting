<?php
    session_start();

    if(isset($_POST['enviar'])){
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        if($usuario==='admin' && $contrasena==='admin'){
            $_SESSION['usuario'] = $usuario;
            //echo '<p>Bienvenido,'. $usuario. '!</p>';
            //echo '<a href="logout.php"><button type="button" name="Salir"></button></a>';
            header("Location: mainAdmin.php");
        } else if($usuario==='user' && $contrasena==='user'){
            $_SESSION['usuario'] = $usuario;
            echo '<p>Bienvenido, '. $usuario. '!</p>';
            header("Location: main.php");
            //echo '<p>Bienvenido, '. $usuario. '!</p>';
            //echo '<a href="logout.php"><button type="button" name="Salir"></button></a>';
        } else {
            echo '<p>ACCESO INCORRECTO</p>';
            header("Refresh: 3, index.php");
            exit;
        }
    }

    class Cliente{

    }
?>
