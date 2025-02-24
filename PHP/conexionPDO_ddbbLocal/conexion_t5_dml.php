<?php

$host = "127.0.0.1"; // IP del servidor
$port = "3306"; // Puerto de MySQL
$dbname = "t5_dml";
$username = "root";
$password = "Swagnabrisa1";

try {
    // Se debe especificar el puerto en la conexión de esta manera
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);

    // Configurar el modo de error para mostrar excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

?>
