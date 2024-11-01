<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bola 8</title>
</head>
<body>
<h1>Juego: Bola 8</h1>
<form action="" method="post">
    <label for="pregunta">Digite su pregunta: </label>
    <input type="text" id="pregunta" name="pregunta" required>

    <button type="submit">Enviar</button>

</form>
<?php
/*EJERCICIO 87 Prepara un formulario (html) con un textbox que realice una pregunta al usuario.
A partir del formulario anterior, crea un programa que muestre la pregunta recibida y genere una
respuesta de forma aleatoria entre un conjunto de respuestas predefinidas, almacenadas en una matriz:
Si, no, quizás, claro que sí, por supuesto que no, no lo tengo claro, seguro, yo diría que sí, ni de cachondeo, etc...*/

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $pregunta = $_POST["pregunta"];

    $palabras = array('Si', 'No', 'Quizás', 'Claro que sí', 'Por supuesto que no', 'No lo tengo claro', 'seguro', 'Yo diría que sí', 'Ni de cachondeo');
    $respuesta = $palabras[array_rand($palabras)];

    echo $respuesta;
}
?>
</body>
</html>