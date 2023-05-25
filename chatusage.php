<?php
include ('connect.php');
$username = $_COOKIE['username'];
$sql = "update users set gptusage = 0 where username = '$username'";
$result =  $conn->query($sql);
header("refresh:0;url=index.php");
