<?php
session_start();

require "../resources/db/conexion.php";

$json = array();

if ($_SERVER["REQUEST_METHOD"] != 'POST') {
    $json['error'] = 'Invalid request method';
    echo json_encode($json);
    exit;
}

$content = file_get_contents('php://input');
$data = json_decode($content, true);


$result = $mysqli->query("SELECT * FROM users WHERE usuario = '{$data['usuario']}'");
$user = $result->fetch_assoc();


if (!$user) {
    $json['error'] = 'User not found!';
    echo json_encode($json);
    exit;
}

if ($data['clave'] !== $user['clave']) {
    $json['error'] = 'Invalid password!';
    echo json_encode($json);
    exit;
}
$_SESSION['user'] = $user;
$json['user'] = $user;
session_write_close();

echo json_encode($json);
