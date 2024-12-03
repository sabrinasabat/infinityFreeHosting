<?php
    //Primero inicio la sesion
    session_start();
    //Compruebo que fue enviado el formulario
    if(isset($_POST['enviar'])){

        //Atribuyo el usuario y la contraseña digitada a una variable
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        //hago la comparacion de que si el usuario y la contraseña son las permitidas
        if($_POST['usuario']==='admin' && $_POST['contrasena']==='admin'){

            //atribuyo a la session el usuario especifico
            $_SESSION['usuario'] = $usuario;

            //imprimo el mensaje especifico del usuario.
            echo '<p>Bienvenido, '. $usuario .'!</p>';

            //atribuyo un botón salir redireccionando a logout, donde se cierra la session y redirecciona a la pagina principal
            echo '<p><a href="logout.php"><input type="button" value="Salir"></a> </p>';

            //la condición del usuario ser el otro permitido
        } else if($_POST['usuario']==='user' && $_POST['contrasena']==='user'){

            //atribuyo el usuario en la sesion
            $_SESSION['usuario'] = $usuario;

            //Mensaje especifica de este usuario
            echo '<p>Bienvenido, '. $usuario .'!</p>';

            //atribuyo un botón salir redireccionando a logout, donde se cierra la session y redirecciona a la pagina principal
            echo '<p><a href="logout.php"><input type="button" value="Salir"></a> </p>';
        } else{
            echo '<p>Imposible logar';
            header("Refresh: 3, URL:=index.php");
            exit;
        }
    }
?>
