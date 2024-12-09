<?php

    $host = 'sql108.infinityfree.com';
    $usuario = 'if0_37620352';
    $contrasena = 'swagnabrisa1';
    $database = 'if0_37620352_proyecto_alumno10';

    $conexion = new PDO("mysql:host=$host;dbname=$database", $usuario, $contrasena);

try {
    $conexion = new PDO("mysql:host=$host;dbname=$database", $usuario, $contrasena);
    echo "Conectado con éxito";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

