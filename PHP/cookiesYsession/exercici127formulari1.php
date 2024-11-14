
<?php
    //envía los datos(nombre y apellidos, email, url y sexo) a 'exercici127formulari2.php'
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<h1>Formulario</h1>
<form action="exercici127formulari2.php" method="post">
    <label for="nombre">Nombre Completo: </label>
    <input type="text" name="nombre" id="nombre" required>
    <br><br>
    <label for="email">Email: </label>
    <input type="email" name="email" id="email" required>
    <br><br>
    <label for="url">URL: </label>
    <input type="url" name="url" id="url" required>
    <br><br>
    <label for="sexo">Sexo: </label>
    <select id="sexo" name="sexo">
        <option value="hombre">Hombre</option>
        <option value="mujer">Mujer</option>
    </select>
    <br><br>
    <button type="submit" name="submit">Enviar</button>
</form>
</body>



