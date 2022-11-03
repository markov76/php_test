<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$data = array (
    'message' => 'hello !!!',
    'origin' => 'http://localhost:3000'
);

$json = json_encode($data,JSON_PRETTY_PRINT);
print $json;
