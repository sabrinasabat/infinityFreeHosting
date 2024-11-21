<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom = $_POST['nom'];
        $edat = $_POST['edat'];
        $dni = $_POST['dni'];
        $dades = $_POST['dades'];
    }


    // Intentamos decodificar el campo JSON (dades)
    $dades_json = json_decode($dades, true); // Convertirlo en un array asociativo

    // Verificamos si la decodificación fue exitosa
    if (json_last_error() === JSON_ERROR_NONE) {
        // JSON válido, lo mostramos de forma legible
        $dades_display = json_encode($dades_json, JSON_PRETTY_PRINT); // Mostrar el JSON formateado
    } else {
        // En caso de error, mostramos un mensaje de error
        $dades_display = "Error al decodificar el JSON.";
    }

    // Mostrar los datos procesados
    echo "Nombre: $nom <br>";
    echo "DNI: $dni <br>";
    echo "Edad: $edat <br>";
    echo "Dades (JSON): <pre>$dades_display</pre><br>";

?>
