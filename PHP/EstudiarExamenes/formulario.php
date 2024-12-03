<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Estudiando para los examenes</title>
    </head>
    <body>
        <h1>Formulario para añadir personas</h1>
        <form action="manejarBaseDeDatos.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="apellido">Apellidos:</label>
            <input type="text" id="apellido" name="apellido" required>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Enviar</button>

        </form>

    </body>
</html>