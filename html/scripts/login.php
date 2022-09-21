<?php

require "../resources/db/conexion.php";
require "../resources/response.php";
require "../resources/functions.php";

allowMethods();
$data=getData();

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
