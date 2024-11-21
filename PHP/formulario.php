<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom = $_POST['nom'];
        $edat = $_POST['edat'];
        $dni = $_POST['dni'];
        $dades = $_POST['dades'];
    }


    // Intentamos decodificar el campo JSON (dades)
    $dades_json = json_decode($dades, true); // Convertirlo en un array asociativo
    $dades_json.json_encode($dades, JSON_PRETTY_PRINT);


    echo "Nombre: $nom <br>";
    echo "DNI: $dni <br>";
    echo "Edad: $edat <br>";
    echo "Dades: <pre>$dades_json</pre><br>";

?>
