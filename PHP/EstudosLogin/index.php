<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <fieldset>
            <h2>Login</h2>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena">

            <button type="submit" name="enviar" value="enviar">Enviar</button>
        </fieldset>
    </form>
</body>
</html>
