<?php

require "../resources/db/conexion.php";
require "../resources/response.php";

$content = file_get_contents('php://input');
$data = json_decode($content, true);

$password = password_hash($data['clave'], PASSWORD_DEFAULT);
$usuario = $data['usuario'];
$name = $data['nombre'];

$result = $mysqli->query("SELECT * FROM users WHERE usuario = '{$usuario}'");
$user = $result->fetch_assoc();

if ($user) {
    sendResponse('User already exists!', 400);
}

$result = $mysqli->query("INSERT INTO users (name, usuario, clave) VALUES ('{$name}', '{$usuario}', '{$password}')");
if (!$result) {
    sendResponse('Error creating user: ' . $mysqli->error, 500);
}

sendResponse("User created successfully");