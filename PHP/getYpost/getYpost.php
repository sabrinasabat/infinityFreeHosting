<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Get y POST</title>
    </head>
    <body>
        <form action="getYpost.php" method="GET">
            <label for="usuario_busca">Nombre a ser buscado:</label>
            <input type="text" id="usuario_busca" name="usuario_busca" required>

            <button type="submit" name="buscar" value="buscar">Buscar</button>
        </form>

        <form action="getYpost.php" method="POST">
            <label for="usuario_cadastro">Usuario:</label>
            <input type="text" id="usuario_cadastro" name="usuario_cadastro" required>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit" name="enviar" value="enviar">Enviar</button>
        </form>
        <h2>Resultados</h2>

        <?php
            if(isset($_GET['buscar'])){
                echo '<p>El nombre que has buscado es: '. $_GET['usuario_busca'];
            }

            if(isset($_POST['enviar'])){
                echo '<p>Cadastro realizado: Nombre - '.$_POST['usuario_cadastro']. ', Edad - '. $_POST['edad']. ', Email - '.$_POST['email'];
            }
        ?>
    </body>
</html>