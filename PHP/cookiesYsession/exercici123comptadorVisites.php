<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
<h1>Contador de visitas</h1>
<?php
/*Mediante el uso de cookies, informa al usuario de si es su primera visita, o si no lo es,
muestre su valor (valor de un contador). Además, debes permitir que el usuario reinicialice su contador de
visitas.*/

    if (isset($_POST['reset'])) {
        setcookie("visitas", '');
        $visitas = 1;
        echo "El contador de visitas ha sido reiniciado.";
        header("Location: exercici123comptadorVisites.php");
        exit();

    } else {
        if (isset($_COOKIE["visitas"])) {
            $visitas = $_COOKIE["visitas"] + 1;
        } else {
            $visitas = 1;
        }
        setcookie("visitas", $visitas);
    }
?>

<p>
    <?php
    if ($visitas == 1) {
        echo "Esta es la primera visita.";
    } else {
        echo "Número de visitas: " . $visitas;
    }
    ?>
</p>

<form method="post">
    <button type="submit" name="reset">Reiniciar Contador</button>
</form>
</body>
</html>