<?php

    session_start();

    // Inicializar clientes predefinidos, caso não estejam configurados
    if (!isset($_SESSION['clientes'])) {
        $_SESSION['clientes'] = [
            ["cliente" => "Maria", "usuario" => "mmaria", "contrasena" => "m123"],
            ["cliente" => "Juan", "usuario" => "juan", "contrasena" => "j123"],
            ["cliente" => "Laura", "usuario" => "laura", "contrasena" => "l123"]
        ];
    }

    if($_POST['usuario'] == 'admin' && $_POST['contrasena'] == 'admin'){
        $_SESSION['usuario'] = $_POST['usuario'];
        $userAdmin = $_POST['usuario'];
        $passwordAdmin = $_POST['contrasena'];
        header("Location: mainAdmin.php");
        exit();
    } else if($_POST['usuario'] == 'usuari' && $_POST['contrasena'] == 'usuari'){
        $_SESSION['usuario'] = $_POST['usuario'];
        $userUsuari = $_POST['usuario'];
        $contrasenaUsuari = $_POST['contrasena'];
        header("Location: mainUsuari.php");
        exit();
    } else if(isset($_SESSION['clientes'])) {
        foreach($_SESSION['clientes'] as $cliente){
            if($_POST['usuario']===$cliente['usuario'] && $_POST['contrasena']===$cliente['contrasena']){
                $_SESSION['usuario'] = $_POST['usuario'];
                header("Location: mainUsuari.php");
                exit();
            }
        }
    }else {
        echo '<p>Error en el usuario o contraseña</p>';
        include 'index.html';
        exit();
    }


?>
