<?php

function sendResponse($message, $code = 200)
{
    http_response_code($code);

    $response = array();

    if ($code != 200) {
        $response['error'] = $message;
    } else {
        $response = $message;
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
