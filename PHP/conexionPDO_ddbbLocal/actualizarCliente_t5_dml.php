<?php
include 'conexion_t5_dml.php';
global $pdo;

try {
    $sql = "UPDATE clientes SET Nombre = :nombre, Ciudad = :ciudad WHERE email = :email";

    $stmt = $pdo->prepare($sql);

    // Substitua os valores conforme necessário
    $stmt->execute([
        ':nombre' => 'Carlos Alberto',
        ':ciudad' => 'Barcelona',
        ':email' => 'novo_cliente@gmail.com'
    ]);

    echo "Cliente atualizado com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao atualizar cliente: " . $e->getMessage();
}
?>
