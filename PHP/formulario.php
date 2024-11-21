<?php
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        $nom = $_GET['nom'];
        $dni = $_GET['dni'];
        $edat = $_GET['edat'];
    }

    echo "Nombre: $nom <br>";
    echo "DNI: $dni <br>";
    echo "Edad: $edat <br>";

?>
