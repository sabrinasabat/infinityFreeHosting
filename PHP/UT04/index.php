<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UT04</title>
</head>
<body>
<form action="login.php" method="post"> <!-- Utilizamos el método post -->
    <fieldset>
        <legend>Login</legend>
        <div>
                <span class='error'>
                    <?php //Si hay un error, lo mostramos, variable global para que pueda ser vista desde el script de login
                    global $error;
                    echo $error;
                    ?>
                </span>
        </div>
        <div class='fila'>
            <label for="usuario">Usuario: </label><br />
            <input type="text" name="inputUsuario" id="usuario" maxlength="50" /><br /> <!-- utilizamos el campo 'name' para identificar el campo en el script de login -->
        </div>
        <div class='fila'>
            <label for="password">Contraseña: </label><br />
            <input type="password" name="inputPassword" id="password" maxlength="50" /><br /> <!-- utilizamos el campo 'name' para identificar el campo en el script de login -->
        </div>
        <div class='fila'>
            <input type="submit" name="enviar" value="Enviar" />
        </div>
    </fieldset>
</form>
</body>
</html>