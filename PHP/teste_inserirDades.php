<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// URL do script principal
$url = "http://ssabat.infinityfreeapp.com/PHP/inserirDades.php";

// Dados a serem enviados no formato JSON
$dados = array(
    "dades" => json_encode(array(
        "nom" => "João Silva", // Nome
        "edat" => 30,          // Idade
        "dni" => "12345678A"   // DNI
    ))
);

// Configurar a requisição POST
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($dados),
    ),
);

$context = stream_context_create($options);

// Fazer a requisição para o script principal
$resultado = file_get_contents($url, false, $context);

// Exibir o resultado retornado pelo script principal
echo $resultado;
?>
