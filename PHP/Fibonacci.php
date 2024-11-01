<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fibonacci</title>
</head>
<body>
<h1>Secuencia Fibonnaci</h1>
<form action="" method="post">
    <label for="num">¿Hasta qué número quieres que se haga el fibonacci? </label>
    <input type="number" id="num" name="num" required>

    <button type="submit">Enviar</button>

</form>
<?php

/*EJERCICIO 53 Escribe un programa que muestre los primeros términos de la serie de Fibonacci.
El primer término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores,
por lo que deberíamos ser 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144...*/
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $num=$_POST['num'];
    $a=0;
    echo "$a, ";
    $b=1;
    echo "$b, ";
    for($i=0;$i<$num-2;$i++){
        $c = $a+$b;
        echo "$c, ";
        $a=$b;
        $b=$c;
    }
}
?>
</body>
</html>