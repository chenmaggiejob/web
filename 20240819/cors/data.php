<?php
//單組
header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Origin: http://192.168.211.71');
// header('Access-Control-Allow-Origin: http://192.168.211.70:8200');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

// 多組
// $http_origin = $_SERVER['HTTP_ORIGIN'];

// if ($http_origin == "http://192.168.211.71" || $http_origin == "http://192.168.211.72" || $http_origin == "http://192.168.211.3") {
//     header("Access-Control-Allow-Origin: $http_origin");
// }
$name = $_GET['name'] ?? 'noname';

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data = [
    's1' => 'am3',
    's2' => 'bo3',
    's3' => 'ca3',
    'name' => $name
];


// dd($data);
echo json_encode($data);
