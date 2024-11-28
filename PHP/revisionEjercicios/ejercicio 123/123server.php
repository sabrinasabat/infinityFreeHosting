<?php
/*Muestra los valores de al ejecutar un script en tu ordenador.
Prueba a pasarle parámetros por GET (y a no pasarle ninguno).
Prepara un formulario ('123post.html') que haga un envío por POST y comprobaremos de nuevo.
Crea una página ('123enlace.html') que tenga un enlace a
y comprueba el valor de 'HTTP_REFERER'. 123server.php $_SERVER 123server.php*/

    if(isset($_GET['nombre'])){
        echo "El valor de nombre via GET es: " . $_GET['nombre'];
    }

    if(isset($_GET['edad'])){
        echo "<br>el valor de edad via GET es: " . $_GET['edad'];
    }

    if(isset($_POST['name'])){
        echo "El valor de nombre via POST es: " . $_POST['name'];
    }

    if(isset($_POST['nickname'])){
        echo "<br>El valor de los apellidos via POST es: " . $_POST['nickname'];
    }

    if(isset($_SERVER['HTTP_REFERER'])){
        echo "<br> El valor de HTTP_REFERER es: " . $_SERVER['HTTP_REFERER'];
    }
?>
