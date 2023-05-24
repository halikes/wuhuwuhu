<?php
include ('connect.php');
// 允许上传的图片后缀

$username = $_COOKIE['username'];
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);     // 获取文件后缀名
$basename = pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME);
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 2048000)   // 小于 2mb
    && in_array($extension, $allowedExts)){
    $sql = "select image,id from users where username = '$username'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $image = $row['image'];
    $id = $row['id'];
    $photo = $id.'.jpg';
    if ($image == null){
        move_uploaded_file($_FILES["file"]["tmp_name"], "image/" . $photo);
        $sql = "update users set image = '$photo' where username = '$username'";
        $conn->query($sql);
        header("refresh:0;url=userpage.php");
    }else{
        unlink("image/".$id.'.jpg');
        move_uploaded_file($_FILES["file"]["tmp_name"], "image/" . $photo);
        $sql = "update users set image = '$photo' where username = '$username'";
        $conn->query($sql);
        header("refresh:0;url=userpage.php");
    }
}else{
    echo "<script>alert('파일 크기는 2mb 미만이어야 하며 gif/jpeg/jpg/png 형식이어야 합니다')</script>";
    header("refresh:0;url=userpage.php");
}