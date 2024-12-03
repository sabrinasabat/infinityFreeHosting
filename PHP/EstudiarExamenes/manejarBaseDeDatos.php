<?php
    include 'conexionBaseDeDatos.php';
    global $conexionDDBB;

    //SQL para crear la tabla
    $sentencias = "CREATE TABLE IF NOT EXISTS Personas(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    edad INT NOT NULL,
    email VARCHAR(100) NOT NULL
)";

    if($conexionDDBB->query($sentencias)===TRUE){
        echo "Tabla creada con succeso.";
    } else {
        echo "Error al crear la tabla." . $conexionDDBB ->error;
    }
// -----------------------------------------------------------------------------------------------------------------

    //Inserir las personas que fueron rellenadas en el formulario
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];

        $sentencias = "INSERT INTO Personas(nombre, apellido, edad, email) VALUES('$nombre', '$apellido', '$edad', '$email')";

        if($conexionDDBB->query($sentencias)==TRUE){
            echo "Persona añadida con succeso.";
            header("Location: formulario.php");
        } else {
            echo "Error al añadir esta persona." . $conexionDDBB->error;
        }
    }
    // -------------------------------------------------------------------------------------------------------------



?>
