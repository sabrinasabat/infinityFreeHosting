<?php

    $errores = [];

    if(!isset($_POST['nombre']) || empty(trim($_POST['nombre']))) {
        $errores[] = 'El campo NOMBRE no está correcto. Imposibilitando la inserción en el formulário';
    } else {
        $nombre = $_POST['nombre'];
    }

    if(!isset($_POST['edad']) || !is_numeric($_POST['edad']) || $_POST['edad']<=0) {
        $errores[] = 'El campo EDAD no está correcto. Imposibilitando la inserción en el formulário';
    } else {
        $edad = $_POST['edad'];
    }

    if(!isset($_POST['curso']) || empty(trim($_POST['curso']))) {
        $errores[] = 'El campo CURSO no está correcto. Imposibilitando la inserción en el formulário';
    } else {
        $curso = $_POST['curso'];
    }

    if(!empty($errores)){
        foreach ($errores as $erro){
            echo '<b>'.$erro.'</b>';
        }
    } else {
        echo '<p>Todos los campos introducidos son válidos.</p><br>';
        echo 'Nombre: '.$nombre. '<br>';
        echo 'Edad: '.$edad. '<br>';
        echo 'Curso: '.$curso. '<br>';

    }
?>
