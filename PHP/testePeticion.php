<?php
header("Content-Type: application/json");

$metodo = $_SERVER["REQUEST_METHOD"];

switch ($metodo){
    case "GET":
        echo json_encode(["mensaje" => "Hola. Hiciste una peticion GET"]);
        break;
    case "POST":
        echo json_encode(["mensaje" => "Hola. Hiciste una peticion POST"]);
        break;
    case "PUT":
        echo json_encode(["mensaje" => "Hola. Hiciste una peticion PUT"]);
        break;
    case "DELETE":
        echo json_encode(["mensaje" => "Hola. Hiciste una peticion DELETE"]);
        break;
    default:
        echo json_encode(["mensaje" => "Hola. Hiciste una peticion desconocida"]);
        break;
}
?>