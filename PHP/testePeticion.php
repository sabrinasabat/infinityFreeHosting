<?php
header("Content-Type: application/json");

$metodo = $_SERVER["REQUEST_METHOD"];

switch ($metodo){
    case "GET":
        echo json_encode(["mensaje" => "!Hola¡ Hiciste una petición GET"]);
        break;
    case "POST":
        echo json_encode(["mensaje" => "!Hola¡ Hiciste una petición POST"]);
        break;
    case "PUT":
        echo json_encode(["mensaje" => "!Hola¡ Hiciste una petición PUT"]);
        break;
    case "DELETE":
        echo json_encode(["mensaje" => "!Hola¡ Hiciste una petición DELETE"]);
        break;
    default:
        echo json_encode(["mensaje" => "!Hola¡ Hiciste una petición desconocida"]);
        break;
}
?>