<?php

    include 'conexion_ddbb.php';

//Verifico si el formulario fue enviado y si el campo 'task' no esta vacío.
    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['task'])) {
        global $conexion; // He puesto como Global porque he tenido los mismos problemas de la ultima tarea
        $task = $_POST['task'];

//No dejaré que haya tareas duplicadas
        $sql_check = "SELECT * FROM tasks WHERE task = '$task'";
        $result_check = $conexion->query($sql_check);

        if($result_check -> num_rows >0){
            echo "Error: La tarea ya existe";
        } else{
            //Añadir nueva tarea
            $sql = "INSERT INTO tasks (task, status) VALUES ('$task', 'pending')";

//Ejecuta la consulta y verifica si salió bien
            if ($conexion->query($sql) === TRUE) {
                echo "Tarea añadida correctamente";
            } else {
                echo "Error: " . $sql . "<br>" . $conexion->error;
            }

// Al crear la tarea, volverá a la página inicial
            header("Location: DWESUT0501_PracticaInicialPHPBD_.php");
            exit;
        }
    }else{
        echo "Por favor, introduzca una tarea";
    }


?>
