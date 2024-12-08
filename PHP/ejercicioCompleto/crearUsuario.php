<?php
session_start();
include 'conexionBaseDeDatos.php';
global $conexionDDBB;

if ($_SESSION['usuario'] !== 'admin') {
    header("Location: formularioLogin.html");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar os dados do formulário
    $nombre = trim($_POST['nombre']);
    $usuario = trim($_POST['usuario']);
    $contrasena = trim($_POST['contrasena']);

    // Validar se os campos estão preenchidos
    if (!empty($nombre) && !empty($usuario) && !empty($contrasena)) {
        // Inserir no banco de dados
        $consulta = "INSERT INTO usuarios (nombre, usuario, contrasena) VALUES ('$nombre', '$usuario', '$contrasena')";

        if ($conexionDDBB->query($consulta) === TRUE) {
            echo '<p>Usuario creado con éxito.</p>';
            echo '<a href="indexAdm.php">Volver a la lista de usuarios</a>';
        } else {
            echo '<p>Error al crear usuario: ' . $conexionDDBB->error . '</p>';
            echo '<a href="crearUsuarioForm.html">Intentar nuevamente</a>';
        }
    } else {
        echo '<p>Todos los campos son obligatorios.</p>';
        echo '<a href="crearUsuarioForm.html">Intentar nuevamente</a>';
    }
} else {
    echo '<p>Método no permitido.</p>';
}
?>

