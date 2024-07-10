<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

?>





<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT * FROM members");
$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
// dd($data);

//如果是在原本設定要加上其他條件可以用 30~35行的方式進行
// $newData = $data;

// foreach ($data as $key => $value) {
//    $newData[$key]['rank'] = 'A' ;
    
// }

?>
