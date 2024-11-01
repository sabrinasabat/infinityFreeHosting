<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Indice y Números</title>
</head>
<body>
<h1>Números digitados + índice</h1>
<form action="" method="post">
    <label for="num">Digite 10 números separados por ESPACIOS: </label>
    <input type="text" id="num" name="num" required>

    <button type="submit">Enviar</button>

</form>
<?php
/***EJERCICIO 78** Realiza un programa que pida 10 números por teclado y que los almacene en un array.
 * A continuación se mostrará el contenido de este array junto con el índice (0 – 9) utilizando para ello una tabla.
 * Seguidamente, el programa pasará los números primos a las primeras posiciones, desplazando el resto de números
 * (los que no son primos) de tal manera que no se pierda ninguno. Al final se debe mostrar el array resultante.
 */
/*
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = explode(" ", $_POST["num"]);
    echo "<br>";

    function numPrimos(){
        if(numPrimos()<2){
            return false;
        }






    echo "Números Digitados: ";
    for($i = 0; $i < count($num); $i++){
        echo $num[$i]. " ";
    }
    echo "<br>";
    echo "Índice: ";
    for($i = 0; $i < count($num); $i++){
        echo $i." ";
    }
}
?>
</body>
</html>*/