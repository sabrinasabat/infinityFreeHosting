<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exámen</title>
</head>
<body>
<h1>Exámen Trimestral</h1>
<form action="" method="post">

    <!-- Primera pregunta -->
    <p><b>Pregunta 1: ¿Qué componentes forman la URL? </b></p>
    <input type="radio" id="p1" name="p1" value="correcto">
    <label for="p1">Protocolo_comunicación://servicio.dominio.tipo_dominio</label><br>
    <input type="radio" id="p1" name="p1" value="incorrecto">
    <label for="opcion2">Protocolo_comunicación:/servicio.hostname.tipo_dominio </label><br>
    <input type="radio" id="p1" name="p1" value="incorrecto">
    <label for="opcion3">Protocolo_comunicación://www.dominio.pais</label><br>

    <!-- Segunda pregunta -->
    <p><b>Pregunta 2: ¿Qué son protocolos? </b></p>
    <input type="radio" id="p2" name="p2" value="incorrecto">
    <label for="opcion1">Unos cables de comunicación</label><br>
    <input type="radio" id="p2" name="p2" value="correcto">
    <label for="p2">Unas normas para la comunicación </label><br>
    <input type="radio" id="p2" name="p2" value="incorrecto">
    <label for="opcion3">Ninguna de las anteriores</label><br>

    <!-- Tercera pregunta -->
    <p><b>Pregunta 3: La impresora es un periférico de...</b> </p>
    <input type="radio" id="p3" name="p3" value="incorrecto">
    <label for="opcion1">Entrada</label><br>
    <input type="radio" id="p3" name="p3" value="correcto">
    <label for="p3">Salida </label><br>
    <input type="radio" id="p3" name="p3" value="incorrecto">
    <label for="opcion3">Entrada y Salida</label><br>

    <!-- Cuarta pregunta -->
    <p><b>Pregunta 4: ¿Cuál <b>NO</b> es un lenguaje de desarrollo web? </b></p>
    <input type="radio" id="p4" name="p4" value="incorrecto">
    <label for="opcion1">Html</label><br>
    <input type="radio" id="p4" name="p4" value="incorrecto">
    <label for="opcion2">Css </label><br>
    <input type="radio" id="p4" name="p4" value="correcto">
    <label for="p4">Visual Basic</label><br>

    <!-- Quinta pregunta -->
    <p><b>Pregunta 5: Es un framework de diseño para desarrollos web </b></p>
    <input type="radio" id="p5" name="p5" value="correcto">
    <label for="p5">La B y C están correctas</label><br>
    <input type="radio" id="p5" name="p5" value="incorrecto">
    <label for="opcion2">Bootstrap </label><br>
    <input type="radio" id="p5" name="p5" value="incorrecto">
    <label for="opcion3">Materializa</label><br>

    <!-- Sexta pregunta -->
    <p><b>Pregunta 6: Símbolo utilizado para declarar variables en PHP </b></p>
    <input type="radio" id="p6" name="p6" value="incorrecto">
    <label for="opcion1"> & </label><br>
    <input type="radio" id="p6" name="p6" value="correcto">
    <label for="p6"> $ </label><br>
    <input type="radio" id="p6" name="p6" value="incorrecto">
    <label for="opcion3"> var </label><br>

    <!-- Séptima pregunta -->
    <p><b>Pregunta 7: ¿Qué significan las letras "LAN"? </b></p>
    <input type="radio" id="p7" name="p7" value="incorrecto">
    <label for="opcion1">Red de área extensa</label><br>
    <input type="radio" id="p7" name="p7" value="incorrecto">
    <label for="opcion2">Red de área personal </label><br>
    <input type="radio" id="p7" name="p7" value="correcto">
    <label for="p7">Red de área local</label><br>

    <!-- Octava pregunta -->
    <p><b>Pregunta 8: En una red cliente-servidor, ¿Qué o quién es el cliente? </b></p>
    <input type="radio" id="p8" name="p8" value="correcto">
    <label for="p8">Un ordenador que requiere los servicios de otro servidor</label><br>
    <input type="radio" id="p8" name="p8" value="incorrecto">
    <label for="opcion2">El usuario que entra en la red </label><br>
    <input type="radio" id="p8" name="p8" value="incorrecto">
    <label for="opcion3">El patrocinador del servidor</label><br>

    <!-- Nona pregunta -->
    <p><b>Pregunta 9: La web 2.0 o web social es:</b></p>
    <input type="radio" id="p9" name="p9" value="incorrecto">
    <label for="opcion1">Lenta, estática y poco participativa</label><br>
    <input type="radio" id="p9" name="p9" value="incorrecto">
    <label for="opcion2">Rápida, eficiente y ordenada </label><br>
    <input type="radio" id="p9" name="p9" value="correcto">
    <label for="p9">Dinámica, participativa y colaborativa</label><br>

    <!-- Décima pregunta -->
    <p><b>Pregunta 10: ¿Qué red virtual recibe datos de forma segura?</b> </p>
    <input type="radio" id="p10" name="p10" value="incorrecto">
    <label for="opcion1">Red social </label><br>
    <input type="radio" id="p10" name="p10" value="correcto">
    <label for="p10">Red VPN </label><br>
    <input type="radio" id="p10" name="p10" value="incorrecto">
    <label for="opcion3">Red VLAN</label><br>
    <br>
    <button type="submit">Enviar</button>


</form>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){ //
    $nota = 0;

    if(isset($_POST['p1'])&& $_POST['p1'] =='correcto'){
        $nota = $nota+1;
    }
    if(isset($_POST['p2']) && $_POST ['p2'] =='correcto'){
        $nota = $nota+1;
    }
    if(isset($_POST['p3']) && $_POST ['p3'] =='correcto'){
        $nota = $nota+1;
    }
    if(isset($_POST['p4']) && $_POST['p4'] =='correcto'){
        $nota = $nota+1;
    }
    if(isset($_POST['$p5']) && $_POST['p5']=='correcto'){
        $nota = $nota+1;
    }
    if(isset($_POST['p6']) && $_POST['p6'] =='correcto'){
        $nota = $nota+1;
    }
    if(isset($_POST['p7']) && $_POST['p7'] =='correcto'){
        $nota = $nota+1;
    }
    if(isset($_POST['p8']) && $_POST['p8'] =='correcto'){
        $nota = $nota+1;
    }
    if(isset($_POST['p9']) && $_POST['p9'] =='correcto'){
        $nota = $nota+1;
    }
    if(isset($_POST['p10']) && $_POST['p10'] =='correcto'){
        $nota = $nota+1;
    }

    echo "Has acertado el total de $nota preguntas";
}
?>
</body>
</html>
