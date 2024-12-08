<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];


        if($usuario === 'admin' && $contrasena === 'admin'){
            $_SESSION['usuario'] = $usuario;
            header("Location: main.php");
            exit();
        } else if($usuario === 'user' && $contrasena === 'user'){
            $_SESSION['usuario'] = $usuario;
            header("Location: mainUsuario.php");
            exit();
            /*$error = "Usuario o contraseña incorreta.";
            include 'index.php';*/
        } else {
            $error = "Usuario o contraseña incorreta.";
            include 'index.php';
        }

       /* if($usuario === 'user' && $contrasena === 'user'){
            $_SESSION['usuario'] = $usuario;
            header("Location: mainUsuario.php");
            exit();
        } else  {
            $error = "Usuario o contraseña incorrecta.";
            include 'index.php';
        }*/
    }
?>
