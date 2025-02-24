<?php
include 'conexion_t5_dml.php';
global $pdo;

try {
    $sql = "DELETE FROM clientes WHERE email = :email";

    $stmt = $pdo->prepare($sql);

    // Substitua o email conforme necessário
    $stmt->execute([
        ':email' => 'novo_cliente@gmail.com'
    ]);

    echo "Cliente deletado com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao deletar cliente: " . $e->getMessage();
}
?>
