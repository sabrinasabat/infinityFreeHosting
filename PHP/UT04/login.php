<?php
//Comprobamos si ya se ha enviado el formulario
if(isset($_POST['enviar'])){ //comprobamos si se ha pulsado el botón de enviar
    $usuario = $_POST['inputUsuario']; //asignamos a la variable $usuario el valor del campo 'name' del formulario
    $password = $_POST['inputPassword']; //lo mismo para $password

    //Validamos que recibimos ambos parámetros
    if(empty($usuario) || empty($password)){ //Condición si alguno de los campos estan vacíos
        $error = "Debes introducir un usuario y contraseña";
        include "index.php"; //al estar vacío y generar el mensaje de error, nos redirige a la página de login
    } else {
        if($usuario == "admin" && $password == "admin"){ //condición si los campos están correctos
            //Almacenamos el usuario en la sesión
            session_start();
            $_SESSION['usuario'] = $usuario;
            //Cargamos la página principal
            include "main.php";
        } else { //condición si los campos no son correctos
            //Si las credenciales no son validas, se vuelven a pedir
            $error = "Usuario o contraseña no válidos!";
            include "index.php"; //al no ser correctos, y enseñar el mensaje de error, nos redirecciona a la página de login
        }
    }
}
?>
