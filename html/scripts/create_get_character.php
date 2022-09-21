<?php

require "../resources/db/conexion.php";
require "../resources/response.php";
require "../resources/functions.php";
require "../models/Actor.php";

allowMethods(["POST", "GET"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = getData();
    $actor = new Actor($data);

    $found = $actor->getByField("personaje");
    if ($found) {
        sendResponse("El personaje ya existe!", 400);
    }

    $result = $actor->create();
    if (!$result) {
        sendResponse("Error al crear el personaje: $mysqli->error", 400);
    }

    sendResponse("Personaje creado correctamente!", 200);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $actor = new Actor();
    $personajes = $actor->get_all();
    sendResponse($personajes, 200);
}
