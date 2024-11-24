<?php
// Incluir a conexão com o banco de dados
    include 'database.php';
    global $conexionDDBB;

// Verificar se os dados foram enviados pelo método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Receber os dados em JSON
        $dados_json = $_POST['dades'] ?? null;

        // Verificar se os dados foram enviados
        if ($dados_json) {
            // Decodificar JSON para um array associativo
            $dados = json_decode($dados_json, true);

            // Validar os campos necessários
            if (isset($dados['nom'], $dados['edat'], $dados['dni'])) {
                $nom = $dados['nom'];
                $edat = $dados['edat'];
                $dni = $dados['dni'];

                // Preparar a instrução SQL para inserir os dados
                $sql_insert = "INSERT INTO dades (nom, edat, dni) VALUES (?, ?, ?)";
                $stmt = $conexionDDBB->prepare($sql_insert);

                if ($stmt) {
                    // Associar os valores aos placeholders
                    $stmt->bind_param("sis", $nom, $edat, $dni);

                    // Executar a instrução
                    $stmt->execute();

                    // Fechar a instrução
                    $stmt->close();
                }
            }
        }
    }

// Fechar a conexão com o banco de dados
$conexionDDBB->close();
?>
