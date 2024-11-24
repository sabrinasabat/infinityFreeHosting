<?php
include 'database.php';
global $conexionDDBB;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dades = $_POST['dades'] ?? null;

    if ($dades) {
        $dades_json = json_decode($dades, true);

        // Validar o JSON recebido
        if (isset($dades_json['nom'], $dades_json['edat'], $dades_json['dni'])) {
            $nom = $dades_json['nom'];
            $edat = (int)$dades_json['edat'];
            $dni = $dades_json['dni'];

            echo "Nome: $nom, Idade: $edat, DNI: $dni<br>";

            $sql_insert = "INSERT INTO dades (nom, edat, dni) VALUES (?, ?, ?)";
            $stmt = $conexionDDBB->prepare($sql_insert);

            if ($stmt) {
                $stmt->bind_param("sis", $nom, $edat, $dni);

                if ($stmt->execute()) {
                    echo "Dados inseridos com sucesso!";
                } else {
                    echo "Erro ao inserir no banco: " . $stmt->error;
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Método POST detectado.<br>";
    echo "Dados recebidos:<br>";
    var_dump($_POST);
} else {
    echo "Método recebido: " . $_SERVER["REQUEST_METHOD"] . "<br>";
    echo "Nenhum dado foi enviado.<br>";
}


$conexionDDBB->close();
?>