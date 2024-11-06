<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td{
            font-family: Consolas, serif;
            border: 1px solid darkgreen;
            background-color: #d3d3d3;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<h1>Estudiantes</h1>

<form action="inserirAlumnos.php" method="POST">
    <label for="estudiante">DNI del estudiante:</label>
    <input type="text" id="dni" name="dni" required>
    <label for="estudiante">Nombre del estudiante:</label>
    <input type="text" id="nombre" name="nombre" required>
    <label for="estudiante">Edad:</label>
    <input type="number" id="edad" name="edad" required>
    <label for="estudiante">Ciclo:</label>
    <input type="text" id="ciclo" name="ciclo" required>
    <button type="submit">Añadir Alumno</button>
</form>

<h2>Listas de Alumnos</h2>

<table>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Ciclo</th>
    </tr>
    <?php
    include 'inserirAlumnos.php';
    ?>
</table>
</body>
</html>