<?php
session_start();
include 'conexionBaseDeDatos.php';
global $conexionDDBB;

if ($_SESSION['usuario'] !== 'admin') {
    header("Location: formularioLogin.html");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = intval($_GET['id']); // Converte o ID para inteiro
    $consulta = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = $conexionDDBB->query($consulta);

    if ($resultado && $resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc(); // pillando los datos de usuario en un array
    } else {
        echo '<p>Usuario no encontrado.</p>';
        echo '<a href="indexAdm.php">Volver</a>';
        exit();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $nombre = trim($_POST['nombre']);
    $usuario = trim($_POST['usuario']);
    $contrasena = trim($_POST['contrasena']);

    $consulta = "UPDATE usuarios SET nombre = '$nombre', usuario = '$usuario', contrasena = '$contrasena' WHERE id = $id";

    if ($conexionDDBB->query($consulta) === TRUE) {
        echo '<p>Usuario actualizado con éxito.</p>';
        echo '<a href="indexAdm.php">Volver a la lista de usuarios</a>';
    } else {
        echo '<p>Error al actualizar el usuario: ' . $conexionDDBB->error . '</p>';
    }
    exit();
} else {
    echo '<p>Método no permitido.</p>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
<form action="editarUsuario.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $usuario['nombre']; ?>" required>
    <br>
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" id="usuario" value="<?php echo $usuario['usuario']; ?>" required>
    <br>
    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" id="contrasena" value="<?php echo $usuario['contrasena']; ?>" required>
    <br><br>
    <button type="submit">Guardar Cambios</button>
</form>
</body>
</html>

