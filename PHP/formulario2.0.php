<?php
include 'database.php';
global $conexionDDBB;

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo "Método HTTP inválido. Use POST.";
    exit;
}

$dades = $_POST['dades'] ?? null;

if (!$dades) {
    echo "Nenhum dado foi enviado.";
    exit;
}

$dades_json = json_decode($dades, true);

if (!isset($dades_json['nom'], $dades_json['edat'], $dades_json['dni'])) {
    echo "JSON inválido ou chaves ausentes.";
    exit;
}

$nom = $dades_json['nom'];
$edat = (int)$dades_json['edat'];
$dni = $dades_json['dni'];

echo "Nome: $nom, Idade: $edat, DNI: $dni<br>";

$sql_insert = "INSERT INTO dades (nom, edat, dni) VALUES (?, ?, ?)";
$stmt = $conexionDDBB->prepare($sql_insert);

if (!$stmt) {
    echo "Erro ao preparar a consulta: " . $conexionDDBB->error;
    exit;
}

$stmt->bind_param("sis", $nom, $edat, $dni);

if (!$stmt->execute()) {
    echo "Erro ao inserir no banco: " . $stmt->error;
    exit;
}

echo "Dados inseridos com sucesso!";
$stmt->close();
$conexionDDBB->close();
?>
