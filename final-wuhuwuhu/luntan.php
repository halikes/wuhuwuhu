<?php
if (isset($_COOKIE['username'])){
    $state = "Account";
}else{
    $state = "Login";
    header("refresh:0;url=login.php");
}
?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Forum</title>
    <meta name="description" content="">
    <meta name="author" content="WebThemez">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link href="css/animate.css" rel="stylesheet" media="screen">
    <link href="flexslider/flexslider.css" rel="stylesheet" />
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Font Awesome -->
    <link href="font/css/font-awesome.min.css" rel="stylesheet">

    <style>
        .post {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            width: 40%;
            margin: 0 auto;
        }

        .post-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .post-title {
            margin: 0;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 10px;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .username {
            font-weight: bold;
        }

        .post-content {
            margin-bottom: 10px;
        }

        .post-footer {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            color: #666;
        }
        .username,
        .post-title,
        .post-content {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .floating-button {
            position: fixed;
            right: 20px;
            bottom: 20px;
            background-color: #4c9cde;
            color: #fff;
            padding: 10px 20px;
            border-radius: 50%;
            font-size: 16px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            z-index: 9999;
            cursor: pointer;
        }
    </style>
</head>

<body>
<header class="header">
    <div class="container">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i></i></b></a> </div>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="mainNav">
                    <li><a href="index.php" class="scroll-link">Home</a></li>
                    <li><a href="userpage.php" class="scroll-link">Account</a></li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
    <!--/.container-->
</header>

<!--/.header-->
<div id="#top"></div>

<section id="home">
    <div class="banner-container">
        <!-- Slider -->
        <div id="main-slider" class="flexslider">
        <ul class="slides">
          <li>
            <img src="images/slides/4.jpg" />
            <div class="flex-caption container">
              <h3>공지</h3>
              <!-- <p>Doloribus omnis minus temporibus perferendis.</p>  -->
              <a href="gonggao.php" class="btn btn-theme">Read More</a>
            </div>
          </li>
          <li>
            <img src="images/slides/5.jpg" alt="" />
            <div class="flex-caption container">
              <h3>지도</h3>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisi.</p>  -->
              <a href="map.php" class="btn btn-theme">Read More</a>
            </div>
          </li>
          <li>
            <img src="images/slides/6.jpg" alt="" />
            <div class="flex-caption container">
              <h3>GPT</h3>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur ersf.</p>  -->
              <a href="chatgpt.php" class="btn btn-theme">Read More</a>
            </div>
          </li>
        </ul>
      </div>
        <!-- end slider -->
    </div>
    <div class="container hero-text2">
      <h3>로마는 하루아침에 이루어진 것이 아니다<br /> 罗马不是一天建成的 <br /> Rome was not built in a day</h3>
    </div>
</section>
<a href="postluntan.php" class="floating-button">post your content</a>
<!--内容部分-->
<?php
include "connect.php";

$sql1 = "select title,content,time,username,id from luntan order by id desc";
$result1 = $conn->query($sql1);
while($row1 = $result1->fetch_assoc()){
    $title = $row1['title'];
    $content = $row1['content'];
    $time = $row1['time'];
    $username = $row1['username'];
    $id = $row1['id'];

    $sql = "select image from users where username = '$username'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $image = $row['image'];
    $path = 'image/'.$image;

    $sql2 = "select count(*) as count from comment where id = '$id'";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
    $count = $row2['count'];
    echo "
    <div class='post' id='content'>
    <div class='post-header'>
        <h2 class='post-title'><a href='comment.php?path=$path&id=$id&username=$username&time=$time'>$title</a></h2>
        <div class='user-info'>
            <div class='avatar'>
                <img src=$path alt='Avatar'>
            </div>
            <div class='username'>$username</div>
        </div>
    </div>
    <div class='post-content'>$content</div>
    <div class='post-footer'>
        <div class='comment-count'>number of comments $count</div>
        <div class='post-date'>$time</div>
    </div>
    </div>
    ";
    echo "<br>";
}
?>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        // 在页面加载完成后执行滚动操作
        var element = document.getElementById('content');
        if (element) {
            element.scrollIntoView();
        }
    });
</script>


<div class="testimonial-area" style="height: 180px !important;">
    <div class="testimonial-solid">
        <div class="container">
            <div class="testi-icon-area">
                <div class="quote">
                    <i class="fa fa-microphone"></i>
                </div>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    include "connect.php";
                    $sql = "select max(id) as max_value from tips";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $maxValue = $row["max_value"];
                    $randomNumber = rand(1, $maxValue - 4);

                    $sql = "select username,content from tips where id = '$randomNumber'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $username = $row['username'];
                    $content = $row['content'];
                    echo "
                    <div class='item active'>
                        <p>$content</p>
                        <p>
                            <b>- $username -</b>
                        </p>
                    </div>
                    ";

                    $sql = "select username,content from tips where id = '$randomNumber' + 1";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $username = $row['username'];
                    $content = $row['content'];
                    echo "
                    <div class='item'>
                        <p>$content</p>
                        <p>
                            <b>- $username -</b>
                        </p>
                    </div>
                    ";

                    $sql = "select username,content from tips where id = '$randomNumber' + 2";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $username = $row['username'];
                    $content = $row['content'];
                    echo "
                    <div class='item'>
                        <p>$content</p>
                        <p>
                            <b>- $username -</b>
                        </p>
                    </div>
                    ";

                    $sql = "select username,content from tips where id = '$randomNumber' + 3";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $username = $row['username'];
                    $content = $row['content'];
                    echo "
                    <div class='item'>
                        <p>$content</p>
                        <p>
                            <b>- $username -</b>
                        </p>
                    </div>
                    ";

                    ?>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" class="">
                        <a href="#"></a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>


<section class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center"> Copyright 2023 | SW창압캡스톤디자인 우후우후 </div>
        </div>
        <!-- / .row -->
    </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/waypoints.js"></script>
<script src="flexslider/jquery.flexslider.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
