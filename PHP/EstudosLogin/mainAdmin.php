<?php
    session_start();

    $usuarioAdmin = $_SESSION['usuario'];
    echo '<h3>Bienvenido, ' . $usuarioAdmin. '</h3><br>';
    echo '<a href="logout.php"><button type="button" value="Salir">Salir</button></a>';


?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Administrador</title>
        <style>
            table{
                width: 30%;
                border-collapse: collapse;
                margin-top: 10px;
            }
            tr, th{
                border: #9a8702 2px solid;
                text-align: center;
                padding: 2px;
            }
            td{
                background-color: #d3d3d3;
                border: 2px solid #9a8702;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Listado de Clientes</th>
            </tr>
            <tr>
                <td>dffdsfds</td>
            </tr>
            <tr>
                <td>fsdfsfd</td>
            </tr>
        </table>
        <table>
            <tr>
                <th>Listado de Soporte</th>
            </tr>
            <tr>
                <td>dfkodpspofd</td>
            </tr>
            <tr>
                <td>ffdpkdsokofd</td>
            </tr>
        </table>
    </body>
</html>
