<?php
    include 'conectar.php';
    global $conectar;

    $errores = [];

    //Validando el nombre
    if(!isset($_POST['nombre']) || empty(trim($_POST['nombre']))){
        $errores[] = 'El campo NOMBRE no está devidamente rellenado.';
    } else {
        $nombre = $_POST['nombre'];
    }

    //Validando la edad
    if(!isset($_POST['edad']) || $_POST['edad']<=0){
        $errores[] = 'El campo EDAD no está devidamente rellenado';
    } else {
        $edad = $_POST['edad'];
    }

    //Validando curso
    if(!isset($_POST['curso']) || empty(trim($_POST['curso']))){
        $errores[] = 'El campo CURSO no está devidamente rellenado';
    } else {
        $curso = $_POST['curso'];
    }

    if(!empty($errores)){
        foreach($errores as $error) {
            echo '<p>' . $error . '<br>';
        }
    } else {
        echo 'Todos los datos del formulario estan rellenado de forma correcta<br>';
        echo 'Nombre: '. $nombre. '<br>';
        echo 'Edad: '. $edad. '<br>';
        echo 'Curso: '. $curso. '<br>';

        $sentenciaSql = "INSERT INTO Estudiantes (nombre, edad, curso) VALUES('$nombre', $edad, '$curso')";

        if($conectar->query($sentenciaSql)){
            echo 'Datos inseridos en la base de datos con succeso';
        } else {
            echo 'No fue posible inserir los datos'. $conectar->error;
        }
    }




