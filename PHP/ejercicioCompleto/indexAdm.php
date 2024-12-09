<?php
    include 'conexionBaseDeDatos.php';
    global $conexionDDBB;
    session_start();

    echo '<h1>Bienvenido, '. $_SESSION['usuario'] . '.</h1>';

    $consultaUsuarios = "SELECT id, nombre, usuario FROM usuarios";
    $resultado = $conexionDDBB->query($consultaUsuarios);

    echo '<a href="crearUsuarioForm.html">Crear Nuevo Usuario</a>';

    echo '<table border="2" width="50%">';

    echo '<tr >';
    echo '<th>ID</th>';
    echo '<th>Nombre</th>';
    echo '<th>Usuário</th>';
    echo '<th>Acción</th>';
    echo '<th>Acción</th>';
    echo '</tr>';

    if($resultado->num_rows>0){
        while($usuario = $resultado->fetch_assoc()){
            echo '<tr>';
            echo '<td>'. $usuario['id'].'</td>';
            echo '<td>'. $usuario['nombre']. '</td>';
            echo '<td>'. $usuario['usuario']. '</td>';
            echo '<td><a href="editarUsuario.php?id='. $usuario['id'] .'" >Editar</a></td>';
            echo '<td><a href="eliminarUsuario.php?id='. $usuario['id'] .'">Eliminar</a></td>';
            echo '</tr>';
        }
    } else {
        echo '<p>No hay usuarios registrados</p>';
    }

    echo '</tr>';
    echo '</table>';

    echo '<a href="logout.php">Cerrar sessión</a>';
?>
