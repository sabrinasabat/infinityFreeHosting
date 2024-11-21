<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom = $_POST['nom'];
        $edat = $_POST['edat'];
        $dni = $_POST['dni'];
        $dades = $_POST['dades'];
    }


    // Intentamos decodificar el campo JSON (dades)
    $dades_json = json_decode($dades, true);


    echo "Nombre: $nom <br>";
    echo "DNI: $dni <br>";
    echo "Edad: $edat <br>";
    echo json_encode($dades_json);

?>
