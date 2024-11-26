<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $login = $_POST['login'];
        $password = $_POST['password'];
    }

    $passnumber = hash('sha256', $password); //sha256 es un algoritmo de encriptación

    echo "Login: $login <br>";
    echo "Password Hash: $passnumber <br>"; //Imprimo la contraseña incriptada

    $contrasenaPuesta = file_get_contents('pwdHash.txt'); //file_get_contents lee el contenido de un archivo

    if($contrasenaPuesta === $passnumber){ //Hago la comparación de que la contraseña hasheada es la misma que la contraseña puesta
        echo "Contraseña correcta"; //Si es, imprime contraseña correcta
    } else {
        echo "Contraseña incorrecta"; //si no, imprime contraseña incorrecta
    }

?>