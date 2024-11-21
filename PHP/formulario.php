<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom = $_POST['nom'];
        $edat = $_POST['edat'];
        $dni = $_POST['dni'];
        $dades = $_POST['dades'];
    }

    $dadesJason = json_decode($dades, true);
    $dadesJ = json_encode($dadesJason, JSON_PRETTY_PRINT);

    echo "Nombre: $nom <br>";
    echo "DNI: $dni <br>";
    echo "Edad: $edat <br>";
    echo "Dades: $dadesJason<br>;"


?>
