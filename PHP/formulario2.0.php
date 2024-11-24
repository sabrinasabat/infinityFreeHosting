<?php
// Incluir o arquivo de conexão com o banco de dados
include 'database.php';
global $conexionDDBB;

// Verificar se os dados foram enviados pelo método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dades = $_POST['dades'] ?? null;

    if ($dades) {
        $dades_json = json_decode($dades, true);
        var_dump($dades_json); // Mostrar os dados recebidos para depuração

        if (isset($dades_json['nom'], $dades_json['edat'], $dades_json['dni'])) {
            $nom = $dades_json['nom'];
            $edat = (int)$dades_json['edat'];
            $dni = $dades_json['dni'];

            $sql_insert = "INSERT INTO dades (nom, edat, dni) VALUES (?, ?, ?)";
            $stmt = $conexionDDBB->prepare($sql_insert);

            if ($stmt) {
                echo "Consulta preparada com sucesso.<br>";
                $stmt->bind_param("sis", $nom, $edat, $dni);

                if ($stmt->execute()) {
                    echo "Dados inseridos com sucesso!";
                } else {
                    echo "Erro ao inserir os dados: " . $stmt->error;
                }

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

$conexionDDBB->close();
?>
