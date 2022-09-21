<?php


function allowMethods($methods = ["POST"])
{
    $method = $_SERVER["REQUEST_METHOD"];
    if (!in_array($method, $methods)) {
        sendResponse('Invalid request method', 400);
    }
}

function getData()
{
    $content = file_get_contents('php://input');
    return json_decode($content, true);
}
