<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <?php
            session_start();
            $_SESSION['nombre'] = 'Sabrina Sabat';
            echo 'Sessión iniciada. <a href="ejemplo2.php"> Clique aquí para ir a la página 2 </a>';
        ?>

    </body>
</html>