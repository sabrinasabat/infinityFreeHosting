<?php

$host = "127.0.0.1:3306";
$dbname = "prueba";
$username = "root";
$password = "1234";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql';
    echo ("Conexión exitosa a la base de datos");
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>