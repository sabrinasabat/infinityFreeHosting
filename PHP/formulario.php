<?php
    // Método post utilizado
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom = $_POST['nom'];
        $edat = $_POST['edat'];
        $dni = $_POST['dni'];
        $dades = $_POST['dades'];
    }

    // Decodificando el JSON
    $dades_json = json_decode($dades, true);

    //Primera tentativa (Así imprime en formato json)
    /*echo "Nombre: $nom <br>";
    echo "DNI: $dni <br>";
    echo "Edad: $edat <br>";
    echo json_encode($dades_json);*/

    //Segunda tentativa (Así imprime en formato texto)
    echo "Nombre: ".$dades_json['nom']."<br>";
    echo "Edad: ".$dades_json['edat']."<br>";
    echo "DNI: ".$dades_json['dni']."<br>";

?>
