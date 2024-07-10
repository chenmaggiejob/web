<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

?>





<?php
$data = $_GET;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql = "INSERT INTO `members` (`id`, `name`, `mobile`) VALUES (NULL, '{$data["name"]}', '{$data["mobile"]}');";
$conn->exec($sql);

header("Location:./index_ajax.php");

?>
