<?php
if (isset($_COOKIE['username'])) {
    header("refresh:0;url=index.php");
}
include "connect.php";
$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password) {
    $sql = "select username from users where username = '$username'";
    $result =  $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<script>alert('username 또는 password 사용되었습니다. 변경하세요.')</script>";
        header("refresh:0;url=register.php");
    } else {
        $sql = "insert into users(username,password,permission,gptusage) values ('$username','$password','0',20)";
        $conn->query($sql);
        echo "<script>alert('회원가입 성공!');</script>";
        header("refresh:0;url=login.php");
    }
} else {
    echo "<script>alert('Cannot be empty!');</script>";
    header("refresh:0;url=register.php");
}
$conn->close();
