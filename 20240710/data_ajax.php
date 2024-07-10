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

echo json_encode($data);  // ajax 差別就是 data.php，加上這行

?>
