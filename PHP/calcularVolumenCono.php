<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular el Volumen del Cono</title>
</head>
<body>
<h1>Calcular el Volumen del Cono</h1>
<form action="" method="post">
    <label for="radio">Digite el valor del rádio:</label>
    <input type="number" id="radio" name="radio" required>

    <label for="altura">Digite el valor de la altura:</label>
    <input type="number" id="altura" name="altura" required>

    <button type="submit">Calcular</button>

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radio = $_POST['radio'];
    $altura = $_POST['altura'];

    class ejercicio21bien{
        public function VolumenCono($radio, $altura){
            $pi = 3.1416;
            $volumen = (1 / 3) * pi() * pow($radio, 2) * $altura;
            return $volumen;
        }
    }

    $cono = new ejercicio21bien();
    $volumen = $cono->VolumenCono($radio, $altura);

    echo("<p>El volumen del cono es: " . round($volumen, 2) . "</p>");
}
?>
</body>
</html>

