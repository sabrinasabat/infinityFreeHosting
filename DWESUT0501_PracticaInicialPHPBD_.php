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
            border: 3px solid #9a8702;
            background-color: rgba(211, 211, 211, 0.94);
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Gestor de Lista de Tareas</h1>

    <form action="anadir_tarea.php" method="POST">
        <label for="task">Nueva Tarea:</label>
        <input type="text" id="task" name="task" required>
        <button type="submit">Añadir Tarea</button>
    </form>

    <h2>Listas de Tareas</h2>

    <table>
        <tr>
            <th>Tarea</th>
            <th>Estado</th>
        </tr>
        <?php
            include 'ensenar_tareas.php';
        ?>
    </table>
</body>
</html>