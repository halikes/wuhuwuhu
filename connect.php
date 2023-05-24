<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "final-wuhu";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    echo "connection failed ";
}else{
//    echo "connection succeed";
}
?>

