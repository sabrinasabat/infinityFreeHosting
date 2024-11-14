<?php
//Lee los datos y los mete en la sesión. A continuación, muestra el resto de campos
//del formulario a rellenar(convivientes, aficiones y menú). Envía estos datos a 'exercici127formulari3.php'
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['url'] = $_POST['url'];
    $_SESSION['sexo'] = $_POST['sexo'];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos</title>
</head>
<body>
    <p><b>Nombre Completo:</b> <?php echo htmlspecialchars($_SESSION['nombre'])?></p>
    <p><b>Email: </b><?php echo htmlspecialchars($_SESSION['email']) ?></p>
    <p><b>URL: </b><?php echo htmlspecialchars($_SESSION['url'])?></p>
    <p><b>Sexo: </b><?php echo htmlspecialchars($_SESSION['sexo'])?></p>


<h1>Formulario 2</h1>
<form action="exercici127formulari3.php" method="post">
    <label for="convivientes">Convivientes: </label>
    <input type="number" name="convivientes" id="convivientes" required>
    <br><br>
    <label for="aficiones">Aficiones: </label>
    <input type="text" name="aficiones" id="aficiones" required>
    <br><br>
    <button type="submit" name="submit">Enviar</button>
</form>
</body>

