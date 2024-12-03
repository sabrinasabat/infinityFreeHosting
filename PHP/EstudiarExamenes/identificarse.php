<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estudiando para los examenes</title>
</head>
<body>
<h1>Loginear con tu usuario</h1>
<form action="loginUsuario.php" method="POST">
    <fieldset>
        <legend>Login</legend>
        <div class="fila">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario"><br>
        </div>
        <div class="fila">
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena"> <br>
        </div>
        <div class="fila">
            <input type="submit" name="enviar" value="Enviar"><br>
        </div>
    </fieldset>
</form>
</body>
</html>