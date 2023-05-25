<?php
include "connect.php";
$id = $_GET['id'];
$username = $_GET['username'];
$content = $_POST['content'];
$sql = "insert into comment(id,username,content,time) values('$id','$username','$content',now())";
$result = $conn->query($sql);
header("refresh:0;url=comment.php?id=$id");