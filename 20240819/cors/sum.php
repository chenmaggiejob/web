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


function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;
$sum = $num1 + $num2;
$name = $_GET['name'] ?? 'noname';


$data = [
    'num1' => $num1,
    'num2' => $num2,
    'sum' => $sum,
    'name' => $name
];


// dd($data);
echo json_encode($data);
