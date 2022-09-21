<?php

require "../resources/db/conexion.php";
require "../resources/response.php";
require "../resources/functions.php";

allowMethods();
$data=getData();

$personaje=$data["personaje"];

$result=$mysqli->query("SELECT * FROM personajes WHERE personaje='$personaje'");
$perso=$result->fetch_assoc();

if(!$perso) sendResponse('Personaje no encontrado', 404);

// $actor = new Actor();
// $actor->asignarNombre($user["n"])

sendResponse($perso, 200);


