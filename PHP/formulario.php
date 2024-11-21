<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom = $_POST['nom'];
        $dni = $_POST['dni'];
        $edat = $_POST['edat'];
    }

    echo "Nombre: $nom <br>";
    echo "DNI: $dni <br>";
    echo "Edad: $edat <br>";

?>
