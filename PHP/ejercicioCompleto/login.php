<?php
    include 'conexionBaseDeDatos.php';
    global $conexionDDBB;
    session_start();

    if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        if(!empty($usuario) && !empty($contrasena)){
            $consultaDDBB = "SELECT * FROM usuarios WHERE usuario = '$usuario' && contrasena = '$contrasena'";
            $resultado = $conexionDDBB->query($consultaDDBB);

            if($resultado && $resultado->num_rows>0){
                $usuarioDDBB = $resultado->fetch_assoc(); //Pillo dos datos del usuario
                $_SESSION['usuario'] = $usuarioDDBB['usuario'];
                $_SESSION['nombre'] = $usuarioDDBB['nombre'];

                if($usuarioDDBB['usuario'] === 'admin'){
                    header("Location: indexAdmin.php");
                } else {
                    header("Location: indexGeneral.php");
                }
                exit();
            } else {
                echo '<p>Usuario o contraseña incorrectos.</p>';
                include 'formularioLogin.html';
            }
        }


       /* if($usuario === 'admin' && $contrasena === 'admin'){
            $_SESSION['usuario'] = $usuario;
            header("Location: indexAdm.php");
            exit();
        } else if($usuario === 'user' && $contrasena === 'user'){
            $_SESSION['usuario'] = $usuario;
            header("Location: indexGeneral.php");
            exit();
        } else {
            echo '<p>Usuario o contraseña incorrectos.';
            include 'formularioLogin.html';
            exit();
        }*/
    } else {
        echo '<p>Hay que completar el formulário.</p>';
    }
?>