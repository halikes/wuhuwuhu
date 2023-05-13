<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "wuhuwuhu";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    echo "connection failed ";
}


