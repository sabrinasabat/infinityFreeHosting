<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 124</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td{
            font-family: Consolas, serif;
            border: 3px solid #9a8702;
            background-color: #d3d3d3;
            padding: 8px;
            text-align: left;
        }


    </style>
</head>
<body>
<?php
    if(isset($_POST)){

        echo "<table>";
        echo "<tr>";
        echo "<th>Nombre" . "</th>";
        echo "<th>Email" . "</th>";
        echo "<th>URL" . "</th>";
        echo "<th>Sexo" . "</th>";
        echo "<th>Convivientes" . "</th>";
        echo "<th>Aficiones" . "</th>";
        echo "<th>Menú favorito" . "</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $_POST['nombre'] . "</td>";
        echo "<td>" . $_POST['email'] . "</td>";
        echo "<td>" . $_POST['url'] . "</td>";
        echo "<td>" . $_POST['sexo'] . "</td>";
        echo "<td>" . $_POST['convivientes'] . "</td>";
        echo "<td>" . $_POST['aficiones'] . "</td>";

        if(isset($_POST['menu1'])){
            echo "<td>" . $_POST['menu1'] . "</td>";
        }

        if(isset($_POST['menu2'])){
            echo "<td>" . $_POST['menu2'] . "</td>";
        }

        if(isset($_POST['menu3'])){
            echo "<td>" . $_POST['menu3'] . "</td>";
        }

        if(isset($_POST['menu4'])){
            echo "<td>" . $_POST['menu4'] . "</td>";
        }

        echo "</tr>";
        echo "</table>";


        /*echo "Nombre: " . $_POST['nombre'] . "<br>";
        echo "Email: " . $_POST['email'] . "<br>";
        echo "URL: " . $_POST['url'] . "<br>";
        echo "Sexo: " . $_POST['sexo'] . "<br>";
        echo "Número de convivientes en el domicilio: " . $_POST['convivientes'] . "<br>";
        echo "Aficiones: " . $_POST['aficiones'] . "<br>";


        if(isset($_POST['menu1'])){
            echo "Menú favorito: " . $_POST['menu1'] . "<br>";
        }

        if(isset($_POST['menu2'])){
            echo "Menú favorito: " . $_POST['menu2'] . "<br>";
        }

        if(isset($_POST['menu3'])){
            echo "Menú favorito: " . $_POST['menu3'] . "<br>";
        }

        if(isset($_POST['menu4'])){
            echo "Menú favorito: " . $_POST['menu4'] . "<br>";
        }*/
    }

?>




</body>
</html>



