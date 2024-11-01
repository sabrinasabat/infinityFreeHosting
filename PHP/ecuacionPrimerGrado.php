<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular Ecuaciones Primer Grado</title>
</head>
<body>
<h1>Calcular Ecuaciones de Primer Grado (ax+b=0)</h1>
<form action="" method="post">
    <label for="num1">Digite el valor de a: </label>
    <input type="number" id="num1" name="num1" required>

    <label for="num2">Digite el valor de b: </label>
    <input type="number" id="num2" name="num2" required>

    <button type="submit">Calcular</button>

</form>
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){ //

     $num1 = $_POST['num1'];
     $num2 = $_POST['num2'];

     if($num1==0){
         if($num2==0){
                echo "La ecuación tiene infinitas soluciones...";
         }else{
             echo "La ecuación no tiene solución...";
         }
     }else{
         $result = -$num2 / $num1;
         echo "El resultado de la ecuación es: x= ". $result;
     }
 }
?>
</body>
</html>