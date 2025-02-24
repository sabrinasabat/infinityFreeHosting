<?php
include 'conexion_t5_dml.php';
global $pdo;

try {
    $sql = "INSERT INTO clientes (email, Nombre, Ap1, Ap2, Ciudad, Direccion, Fecha_Alta) 
            VALUES (:email, :nombre, :ap1, :ap2, :ciudad, :direccion, :fecha_alta)";

    $stmt = $pdo->prepare($sql);

    // Substitua os valores conforme necessário
    $stmt->execute([
        ':email' => 'novo_cliente@gmail.com',
        ':nombre' => 'Carlos',
        ':ap1' => 'Fernández',
        ':ap2' => 'Lopez',
        ':ciudad' => 'Madrid',
        ':direccion' => 'Calle Mayor, 50',
        ':fecha_alta' => '2025-01-01'
    ]);

    echo "Cliente criado com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao criar cliente: " . $e->getMessage();
}
?>
