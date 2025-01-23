<?php
    //Comprobamos si ya se ha enviado el formulario
    if(isset($_POST['enviar'])){
        $usuario = $_POST['inputUsuario'];
        $password = $_POST['inputPassword'];

        //Validamos que recibimos ambos parámetros
        if(empty($usuario) || empty($password)){
            $error = "Debes introducir un usuario y contraseña";
            include "indexUT4.php";
        } else {
            if($usuario == "admin" && $password == "admin"){
                //Almacenamos el usuario en la sesión
                session_start();
                $_SESSION['usuario'] = $usuario;
                //Cargamos la página principal
                include "main.php";
            } else {
                //Si las credenciales no son validas, se vuelven a pedir
                $error = "Usuario o contraseña no válidos!";
                include "indexUT4.php";
            }
        }
    }
?>
