<?php
// Incluir a conexão com o banco de dados
include 'conexion_t5_dml.php';
global $pdo;

try {
    // Preparar a consulta SQL para buscar todos os clientes
    $sql = "SELECT * FROM clientes";
    $stmt = $pdo->prepare($sql);

    // Executar a consulta
    $stmt->execute();

    // Buscar todos os resultados como um array associativo
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Verificar se há resultados
    if (count($clientes) > 0) {
        echo "<h2>Lista de Clientes</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Email</th><th>Nome</th><th>Sobrenome</th><th>Cidade</th><th>Endereço</th><th>Data de Cadastro</th></tr>";

        // Iterar sobre os clientes e exibir os dados
        foreach ($clientes as $cliente) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($cliente['email']) . "</td>";
            echo "<td>" . htmlspecialchars($cliente['Nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($cliente['Ap1'] . " " . $cliente['Ap2']) . "</td>";
            echo "<td>" . htmlspecialchars($cliente['Ciudad']) . "</td>";
            echo "<td>" . htmlspecialchars($cliente['Direccion']) . "</td>";
            echo "<td>" . htmlspecialchars($cliente['Fecha_Alta']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum cliente encontrado.";
    }
} catch (PDOException $e) {
    echo "Erro ao buscar clientes: " . $e->getMessage();
}
?>
