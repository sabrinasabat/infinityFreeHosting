<?php
header("Content-Type: application/json");

$metodo = $_SERVER["REQUEST_METHOD"];

switch ($metodo){
    case "GET":
        http_response_code(200); // ha funcionado
        echo json_encode(["mensaje" => "Hola. Hiciste una peticion GET"]);
        break;
    case "POST":
        http_response_code(200);
        echo json_encode(["mensaje" => "Hola. Hiciste una peticion POST"]);
        break;
    case "PUT":
        http_response_code(200);
        echo json_encode(["mensaje" => "Hola. Hiciste una peticion PUT"]);
        break;
    case "DELETE":
        http_response_code(200);
        echo json_encode(["mensaje" => "Hola. Hiciste una peticion DELETE"]);
        break;
    default:
        http_response_code(405); //no compatible con el servidor o el recurso
        echo json_encode(["mensaje" => "Método no permitido"]);
        break;
}
?>