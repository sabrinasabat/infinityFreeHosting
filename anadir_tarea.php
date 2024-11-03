<?php

    include 'conexion_ddbb.php';

//Verifico si el formulario fue enviado y si el campo 'task' no esta vacío.
    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['task'])) {
        global $conexion;
        $task = $_POST['task'];


//Añadir nueva tarea
        $sql = "INSERT INTO tasks (task, status) VALUES ('$task', 'pending')";

//Ejecuta la consulta y verifica si salió bien
        if ($conexion->query($sql) === TRUE) {
            echo "Tarea añadida correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }

// Al crear la tarea, volverá a la página inicial
        header("Location: DWESUT0501_PracticaInicialPHPBD_.html");
        exit;
    }else{
        echo "Por favor, introduzca una tarea";
    }


?>
