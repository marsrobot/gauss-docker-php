<?php

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));
$input = json_decode(file_get_contents('php://input'), true);

if ($method == 'POST') {
    $result = [
        "sum" => $input['x'] + $input['y'],
    ];
    echo ('') . json_encode($result);
} else {
    echo "gauss-docker-php";
}
