<?php

include 'conection_ddbb.php';
global $conection;

// Creando la tabla cliente

$sql = "CREATE TABLE IF NOT EXISTS cliente(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    edad INT NOT NULL,
    email VARCHAR(50) NOT NULL
)";

try {
    $conection->exec($sql);
    echo "Tabla creada correctamente.";
} catch(PDOException $e){
    echo "error al crear la tabla: " . $e->getMessage();
}

// Creando los clientes

$sql = "INSERT IGNORE INTO cliente (nombre, apellido, edad, email) VALUES
('Juan', 'Perez', 25, 'juan_perito@hotmail.com'),
('Maria', 'Sanchez', 38, 'mariascz@gmail.com'),
('Lucca', 'Parcholli', 19, '@lparcholli@hotmail.com'),
('Renata', 'Bogotti', 27, 're_bog@outlook.com')";

try{
    $conection->exec($sql);
    echo "Datos insertados correctamente";
} catch(PDOException $e){
    echo "Error al insertar los datos: " . $e->getMessage();
}




