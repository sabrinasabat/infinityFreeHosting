<?php
    require_once 'funcions.php';

    // Dades inicials (exemple)
    //Creando productos:
    $producto1 = crearProducte('Samarreta', 'Samarreta de cotó', 19.99);
    $producto2 = crearProducte('Pantalons', 'Pantalons vaquer', 39.99);
    $producto3 = crearProducte('Jaqueta', 'Corta vento', 35.00);
    $producto4 = crearProducte('Vaquero', 'Piernas cortas', 49.50);

    //Creando categorías:
    $categoria1 = crearCategoria('Roba', 'Secció de roba');
    $categoria2 = crearCategoria('Home', 'Productes per a home');
    $categoria3 = crearCategoria('Jaquetas', 'Corta vento');

    //Agregando categoría al producto
    agregarCategoriaAProducte($producto1, $categoria1);
    agregarCategoriaAProducte($producto1, $categoria2);
    agregarCategoriaAProducte($producto2, $categoria1);
    agregarCategoriaAProducte($producto3, $categoria3);
    agregarCategoriaAProducte($producto3, $categoria1);
    agregarCategoriaAProducte($producto4, $categoria1);

    //Validación de errores:
    //$producto5 = crearProducte('', 'amem', 74.80); -- Sí, ha funcionado

    // Mostrar productes
    $productos = [$producto1, $producto2, $producto3, $producto4];
    //mostrarProductes($productos);

    //$productesRoba = obtenirProductsPorCategoria($categoria1, $productos);
    //mostrarProductes($productesRoba);

    //$productesJaquetas = obtenirProductsPorCategoria($categoria3, $productos);
    //mostrarProductes($productesJaquetas);

    /*Observaciones: Si quieres ver el resultado en texto php, quite el comentario de la línea 30 y ejecute el código.
    Hay que cambiar la variable global del template.php para usar 'productes roba' o 'productes jaqueta'
    */
    include "template.php";

?>
