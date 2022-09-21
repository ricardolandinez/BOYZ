<?php

require "../resources/db/conexion.php";
require "../resources/response.php";
require "../resources/functions.php";

allowMethods();
$data=getData();

$password = password_hash($data['clave'], PASSWORD_DEFAULT);
$usuario = $data['usuario'];
$name = $data['nombre'];
$isAdmin = $data["admin"];

$result = $mysqli->query("SELECT * FROM users WHERE usuario = '{$usuario}'");
$user = $result->fetch_assoc();

if ($user) {
    sendResponse('User already exists!', 400);
}

$sql="INSERT INTO users (nombre, usuario, clave, `admin`) VALUES ('$name', '$usuario', '$password', $isAdmin);";
// echo $sql;
// exit;
$result = $mysqli->query($sql);
if (!$result) {
    sendResponse('Error creating user: ' . $mysqli->error, 500);
}

sendResponse("User created successfully");