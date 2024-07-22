<?php
include_once "../../class/base.php";
$data = $_GET;

$students = new DB('students');
$students->store($data);


?>

