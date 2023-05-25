<?php
include "connect.php";
$title = $_POST['title'];
$content = $_POST['content'];
$username = $_COOKIE['username'];

$sql = "insert into luntan(title,content,username,time) values('$title','$content','$username',now())";
$result = $conn->query($sql);
header("refresh:0;url=luntan.php");
