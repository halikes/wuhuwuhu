<?php
include 'connect.php'; // 包含数据库连接文件

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 处理表单提交
    $title = $_POST['title'];
    $content = $_POST['content'];
    // $created_at = date('Y-m-d');

    // 插入数据到数据库
    $query = "INSERT INTO gonggao (title, content, created_at) VALUES ('$title', '$content', now())";
    if ($conn->query($query) === TRUE) {
        echo "数据插入成功";
        header('Location: gonggao.php');
        exit();
      } else {
        echo "数据插入失败: " . $conn->error;
      }

    // 重定向到公告列表页面
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add_announcement</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/gonggao.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link href="css/animate.css" rel="stylesheet" media="screen">
    <link href="flexslider/flexslider.css" rel="stylesheet" />
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <link href="font/css/font-awesome.min.css" rel="stylesheet">
    <style>
    body {
      display: flex;
      flex-direction: column; /* 垂直方向排列子元素 */
      justify-content: center; /* 在垂直方向上居中对齐子元素 */
      align-items: center; /* 在水平方向上居中对齐子元素 */
      height: 100vh; /* 设置容器高度为视窗高度 */
    }
  </style>
</head>
<body style="background-color: #88d1ff;">
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">

                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active" id="firstLink"><a href="index.php" class="scroll-link">Home</a></li>
                        <li class="active" id="firstLink"><a href="gonggao.php" class="scroll-link">back</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <h1>Add</h1>
    <form method="POST" action="">
        <label for="title">title：</label><br>
        <input type="text" name="title" id="title" required><br><br>
        <label for="content">content：</label><br>
        <textarea name="content" id="content" rows="4" required></textarea><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>