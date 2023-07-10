<?php
include_once "encabezado.php";
$idUsuario = json_decode(file_get_contents("php://input"));
if (!$idUsuario) {
    http_response_code(500);
    exit;
}

include_once "funciones.php";
var_dump($idUsuario);
 
$resultado = obtenerRolUsuario($idUsuario);

echo json_encode($resultado);