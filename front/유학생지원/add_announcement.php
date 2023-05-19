<?php
include 'connect.php'; // 包含数据库连接文件

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 处理表单提交
    $title = $_POST['title'];
    $content = $_POST['content'];
    $created_at = date('Y-m-d H:i:s');

    // 插入数据到数据库
    $query = $db->prepare("INSERT INTO gonggao (title, content, created_at) VALUES (:title, :content, :created_at)");
    $query->bindParam(':title', $title);
    $query->bindParam(':content', $content);
    $query->bindParam(':created_at', $created_at);
    // 查询 $query->execute();

    // 重定向到公告列表页面
    header('Location: announcements.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>添加公告</title>
</head>
<body>
    <h1>添加公告</h1>
    <form method="POST" action="">
        <label for="title">标题：</label>
        <input type="text" name="title" id="title" required><br><br>
        <label for="content">内容：</label><br>
        <textarea name="content" id="content" rows="4" required></textarea><br><br>
        <input type="submit" value="发布公告">
    </form>
</body>
</html>
