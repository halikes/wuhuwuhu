<?php

$host = "localhost";
$username = "root";
$password = "12345678";
$dbname = "wuhuwuhu";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die('数据库连接错误: ' . $e->getMessage());
}
?>


