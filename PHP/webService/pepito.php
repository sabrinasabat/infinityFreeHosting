<?php
header("Content-Type: application/json");

$metodo = $_SERVER["REQUEST_URI"];

if($metodo == '/PHP/pepito.php/prova' && $_SERVER["REQUEST_METHOD"] == "GET"){
    http_response_code(200);
    echo json_encode(["mensaje" => "Muy bien, hiciste una peticiin GET"]);
} else if($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "DELETE" || $_SERVER["REQUEST_METHOD"] == "PUT"){
    http_response_code(400);
    echo json_encode(["mensaje" => "Metodo no permitido"]);
} else {
    http_response_code(404); // para ruta no encontrada
    echo json_encode(["mensaje" => "Ruta no encontrada"]);
}

?>
