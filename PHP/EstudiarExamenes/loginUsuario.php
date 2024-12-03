<?php

    if(isset($_POST['enviar'])){
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        if($usuario == 'admin' && $contrasena == 'admin'){
            session_start();
            include 'formulario.php';
        } else {
            $error = "Usuario o contraseña incorrectos";
            include 'identificarse.php';
        }
    }




?>
