<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8">
    <head>
        <title>Login</title>
    </head>
    <body>

    <form action="login.php" method="POST">
        <fieldset>
            <legend>Login</legend>
            <div class="error">
                <?php
                    if(isset($error)){
                        echo htmlspecialchars($error);
                    }
                ?>
            </div>
            <div class="fila">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario"><br>
            </div>
            <div class="fila">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena"><br><br>
            </div>
            <div class="fila">
                <input type="submit" name="enviar" value="Enviar">
            </div>
        </fieldset>

    </form>

    </body>
</html>
