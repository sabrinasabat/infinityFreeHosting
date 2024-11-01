<?php
    require_once 'Empleado113_Telefono.php';

    $empleado1=new Empleado("Sabrina", "Sabat", 3500);
    $empleado2=new Empleado("Bruno", "Lima", 1500);
    $empleado3=new Empleado("Juan", "Martinez", 2000);

    echo $empleado1->getNombreCompleto(). ". Debe pagar impuestos? ". '<b>'. ($empleado1->debePagarImpuestos()?'Si':'No').'</b><br>';
    echo '<br>'.$empleado2->getNombreCompleto() . ". Debe pagar impuestos? ". '<b>'. ($empleado2->debePagarImpuestos() ? 'Si' : 'No').'</b><br>';
    echo '<br>'.$empleado3->getNombreCompleto() .". Debe pagar impuesto? ". '<b>'. ($empleado3->debePagarImpuestos() ? 'Si' : 'No').'</b><br>';


    $empleado1->anadirTelefono(642072983);
    $empleado2->anadirTelefono(643904528);
    $empleado3->anadirTelefono(669870024);
    $empleado3->anadirTelefono(698888875);


    echo '<br>'."Lista de teléfonos cadastrados de ".'<b>'.$empleado3->getNombreCompleto().'</b>'.": ".$empleado3->listarTelefonos();

    echo '<p>'. "Después de eliminar los teléfonos...".'<br>';
    echo '<br>'."Lista de teléfonos cadastrados de ".'<b>'.$empleado3->getNombreCompleto().'</b>'.": ".$empleado3->vaciarTelefonos().$empleado3->listarTelefonos();

?>