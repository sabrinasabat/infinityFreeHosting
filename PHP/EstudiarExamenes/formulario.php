<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Estudiando para los examenes</title>
        <style>
            table{
                width: 100%;
                margin-top: 50px;
                border-collapse: collapse;
            }

            tr, th{
                border: 2px solid #d3d3d3;
                text-align: center;
                padding: 10px;
            }

            th{
                background-color: blanchedalmond;
            }

        </style>
    </head>
    <body>
        <h1>Formulario para añadir personas</h1>
        <form action="manejarBaseDeDatos.php" method="POST">
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

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include 'ensenarPersonas.php';
        ?>


        </tbody>
    </table>

    </body>
</html>