<?php
// Incluir o arquivo de conexão com o banco de dados
include 'database.php';
global $conexionDDBB;

// Verificar se os dados foram enviados pelo método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber o JSON enviado pelo professor
    $dades = $_POST['dades'] ?? null;

    // Verificar se o JSON foi recebido
    if ($dades) {
        // Decodificar o JSON em um array associativo
        $dades_json = json_decode($dades, true);

        // Validar se as chaves esperadas estão presentes
        if (isset($dades_json['nom'], $dades_json['edat'], $dades_json['dni'])) {
            // Extrair os valores do JSON
            $nom = $dades_json['nom']; // Nome
            $edat = (int)$dades_json['edat']; // Idade convertida para inteiro
            $dni = $dades_json['dni']; // DNI

            // Preparar a consulta SQL para inserir os dados no banco
            $sql_insert = "INSERT INTO dades (nom, edat, dni) VALUES (?, ?, ?)";
            $stmt = $conexionDDBB->prepare($sql_insert);

            if ($stmt) {
                // Associar os valores aos placeholders
                $stmt->bind_param("sis", $nom, $edat, $dni);

                // Executar a consulta
                if ($stmt->execute()) {
                    echo "Dados inseridos com sucesso!";
                } else {
                    echo "Erro ao inserir os dados: " . $stmt->error;
                }

                // Fechar a instrução
                $stmt->close();
            } else {
                echo "Erro ao preparar a consulta: " . $conexionDDBB->error;
            }
        } else {
            echo "JSON inválido ou chaves ausentes.";
        }
    } else {
        echo "Nenhum dado foi enviado.";
    }
} else {
    echo "Método HTTP inválido. Use POST.";
}

// Fechar a conexão com o banco de dados
$conexionDDBB->close();
?>
