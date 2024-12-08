<?php
    include 'conectar.php';
    global $conectar;

    if(!isset($_GET['filtro']) || empty(trim($_GET['filtro']))){
        echo '<p>El formulario no fue rellenado correctamente.';
    } else{
        $filtro = $conectar -> real_escape_string(trim($_GET['filtro']));

        $sentenciaSql = "SELECT nombre, edad, curso FROM Estudiantes WHERE nombre LIKE '%$filtro' OR curso LIKE '%$filtro'";

        $resultado = $conectar->query($sentenciaSql);

        if($resultado && $resultado->num_rows>0){
            echo '<table>';
            echo '<tr>';
            echo '<th>Nombre</th>';
            echo '<th>Edad</th>';
            echo '<th>Curso</th>';
            echo '</tr>';
            while($fila = $resultado->fetch_assoc()){
                echo '<tr>';
                echo '<td>'.$fila['nombre'].'</td>';
                echo '<td>'.$fila['edad'].'</td>';
                echo '<td>'.$fila['curso'].'</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<p>No encontramos resultado para'. $filtro. '</p>';
        }
    }

    ?>
