<?php
    $array = ['Arroz', 'Feijão', 'Macarrão', 'Azeite', 'Sal'];

    foreach ($array as $comidas){
        echo $comidas."<br>";
    }

    echo 'El número total de productos es: '. count($array). "<br>";

    echo 'Quieres adicionar más productos?';
    $respuesta = 'si';
    $nuevoProducto = 'Farinha';
    while($respuesta=='si'){
        array_push($array, $nuevoProducto);
        echo "Producto añadido correctamente";
        $respuesta = 'no';
    }
    echo 'Lista final de productos <br>';
    foreach ($array as $comidas){
        echo $comidas.'<br>';
    }
?>