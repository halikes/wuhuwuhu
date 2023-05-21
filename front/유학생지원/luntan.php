<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $statement = $db->prepare("INSERT INTO posts (user_id, title, content) VALUES (:user_id, :title, :content)");
    $statement->bindParam(':user_id', $_SESSION['user_id']);
    $statement->bindParam(':title', $title);
    $statement->bindParam(':content', $content);
    $statement->execute();
}

$statement = $db->prepare("SELECT * FROM posts ORDER BY created_at DESC");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>论坛</title>
    <style>
        /* 样式化帖子容器 */
.post {
    margin-bottom: 20px;
    padding: 10px;
    background-color: #f5f5f5;
    border: 1px solid #ccc;
  }
  
  /* 帖子标题样式 */
  .post-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
  }
  
  /* 帖子内容样式 */
  .post-content {
    margin-bottom: 10px;
  }
  
  /* 作者样式 */
  .post-author {
    color: #888;
  }
  
  /* 分割线样式 */
  hr {
    border: 0;
    border-top: 1px solid #ccc;
    margin: 10px 0;
  }
  
  /* 评论容器样式 */
  .comment {
    margin-bottom: 10px;
    padding: 5px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
  }
  
  /* 评论内容样式 */
  .comment-content {
    margin-bottom: 5px;
  }
  
  /* 评论作者样式 */
  .comment-author {
    color: #888;
  }
  
    </style>
</head>
<body>
    <h1>论坛</h1>

    <?php if ($_SESSION['user_id']): ?>
        <h2>发表新帖</h2>
        <form method="POST" action="">
            <label for="title">标题：</label>
            <input type="text" id="title" name="title" required><br>
            <label for="content">内容：</label><br>
            <textarea id="content" name="content" required></textarea><br>
            <button type="submit">发布</button>
        </form>
    <?php else: ?>
        <p>请先<a href="login.php">登录</a>来发表帖子。</p>
    <?php endif; ?>

    <h2>帖子列表</h2>
    <?php foreach ($posts as $post): ?>
        <div class="post">
            <div class="post-title"><?php echo $post['title']; ?></div>
            <div class="post-content"><?php echo $post['content']; ?></div>
            <div class="post-author">作者：<?php echo $post['user_id']; ?></div>
            <hr>
            <h4>评论</h4>
            <?php
            $statement = $db->prepare("SELECT * FROM comments WHERE post_id = :post_id ORDER BY created_at ASC");
            $statement->bindParam(':post_id', $post['id']);
            $statement->execute();
            $comments = $statement->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <?php foreach ($comments as $comment): ?>
                <div class="comment">
                    <div class="comment-content"><?php echo $comment['content']; ?></div>
                    <div class="comment-author">评论者：<?php echo $comment['user_id']; ?></div>
                </div>
            <?php endforeach; ?>
            <form method="POST" action="">
                <label for="comment">发表评论：</label><br>
                <textarea id="comment" name="comment" required></textarea><br>
                <input type="hidden" name="post_id" value="<?php echo $post['id']; ?>">
                <button type="submit">评论</button>
            </form>
        </div>
    <?php endforeach; ?>
</body>
</html>
