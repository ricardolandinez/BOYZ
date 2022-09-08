<?php

$mysqli = new mysqli("137.184.25.154", "prueba", "prueba123", "boyz");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    exit;
}


