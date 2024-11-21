<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom = $_POST['nom'];
        $edat = $_POST['edat'];
        $dni = $_POST['dni'];
    }

    echo "Nombre: $nom <br>";
    echo "DNI: $dni <br>";
    echo "Edad: $edat <br>";

?>
