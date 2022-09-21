<?php

$host=$_ENV["DB_HOST"];
$dbname=$_ENV["DB_DATABASE"];
$user=$_ENV["DB_USER"];
$password=$_ENV["DB_PASSWORD"];

$mysqli = new mysqli($host, $user, $password, $dbname);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    exit;
}


