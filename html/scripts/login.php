<?php

require "../resources/db/conexion.php";
require "../resources/response.php";

$json = array();

if ($_SERVER["REQUEST_METHOD"] != 'POST') {
    sendResponse('Invalid request method', 400);
}

$content = file_get_contents('php://input');
$data = json_decode($content, true);


$result = $mysqli->query("SELECT * FROM users WHERE usuario = '{$data['usuario']}'");
$user = $result->fetch_assoc();


if (!$user) {
    sendResponse('User not found!', 400);
}

if (!password_verify($data['clave'], $user['clave'])) {
    sendResponse('Invalid password!', 400);
}

session_start();
$_SESSION['user'] = $user;

sendResponse($user, 200);
