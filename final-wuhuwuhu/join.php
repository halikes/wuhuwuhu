<?php
include "connect.php";
$username = $_COOKIE['username'];
$value = $_GET['value'];

if($value == "1"){
    $sql = "update users set permission = 1,gptusage = 20 where username = '$username'";
    $conn->query($sql);
    header("refresh:0;url=userpage.php");
}else if($value == "2"){
    $sql = "update users set permission = 2,gptusage = 30 where username = '$username'";
    $conn->query($sql);
    header("refresh:0;url=userpage.php");
}else if($value == "3"){
    $sql = "update users set permission = 3,gptusage = 50 where username = '$username'";
    $conn->query($sql);
    header("refresh:0;url=userpage.php");
}
