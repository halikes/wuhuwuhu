<?php
include ('connect.php');
$username = $_COOKIE['username'];
$sql = "select id from users where username = '$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['id'];
$content = $_POST['message'];
$sql = "insert into tips(username,content) values('$username','$content')";
$result = $conn->query($sql);
header("refresh:0;url=tips.php");
