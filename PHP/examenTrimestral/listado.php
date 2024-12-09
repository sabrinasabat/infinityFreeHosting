<?php
    include 'conexion.php';
    global $conexion;

    $sql = "SELECT id, nombre FROM productos";
    $resultado = $conexion -> query($sql);

    if($resultado->num_rows>0){
        echo '<table border="2px" style="background-color: #d3d3d3">';
        echo '<tr>';
        echo '<th>Detalle</th>';
        echo '<th>Código</th>';
        echo '<th>Nombre</th>';
        echo '<th>Acciones</th>';
        echo '</tr>';
        while($arrayDeDatos = $resultado->fetch_assoc()){
            echo '<tr>';
            echo '<td><a href="detalle.php"><button type="button" style="background-color: deepskyblue">Detalle</button></a> </td>';
            echo '<td>'.$arrayDeDatos['id']. '</td>';
            echo '<td>'.$arrayDeDatos['nombre']. '</td>';
            echo '<td><a href="update.php"><button type="button" style="background-color: yellow">Actualizar</button></a> <a href="borrar.php"><button type="button" style="background-color: red">Borrar</button> </a> </td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nombre']) && !empty($_POST['nombreCorto']) && !empty($_POST['precio']) && !empty($_POST['familia']) && !empty($_POST['descripcion'])) {
        $nombre = $_POST['nombre'];
        $nombreCorto = $_POST['nombreCorto'];
        $precio = $_POST['precio'];
        $familia = $_POST['familia'];
        $descripcion = $_POST['descripcion'];

        $sql = "INSERT INTO productos (nombre, nombre_corto, descripcion, pvp, familia) VALUES ('$nombre', '$nombreCorto', '$descripcion', '$precio', '$familia')";

        if ($conexion->query($sql) === TRUE) {
            echo "Producto añadido correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }

        header("Location: listado.php");
        exit;
    }