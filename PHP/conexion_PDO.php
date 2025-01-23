<?php

$host = "localhost";
$dbname = "proyecto_alumno10";
$username = "root";
$password = "Swagnabrisa1";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql';
    echo ("Conexión exitosa a la base de datos");
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>