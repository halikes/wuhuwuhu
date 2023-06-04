

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
  <title>USER PAGE</title>
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
<!--                    <li class="active" id="firstLink"><a href="#home" class="scroll-link" >Home</a></li>-->
                    <li><a href="index.php" class="scroll-link">Home</a></li>
<!--                    <li><a href="#services" class="scroll-link">Services</a></li>-->
<!--                    <li><a href="#aboutUs" class="scroll-link">About Us</a></li>-->
<!--                    <li><a href="#work" class="scroll-link">Events</a></li>-->
<!--                    <li><a href="#plans" class="scroll-link">Plans</a></li>-->
<!--                    <li><a href="#team" class="scroll-link">Team</a></li>-->

                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
    <!--/.container-->
</header>

<header>
    <!--    自定义样式-->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .profile {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin: 50px auto;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile h1, .profile p {
            margin: 0;
        }

        .profile .logout-btn {
            background-color: #4c9cde;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 16px;
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        .profile input[type="file"] {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            display: block;
            font-size: 16px;
            margin: 0;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        #notice {
            color: #c0abab;
            text-decoration: none;
            float: right;
        }

    </style>
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
                        <h3>今日公告</h3>
                        <!-- <p>Doloribus omnis minus temporibus perferendis.</p>  -->
                        <a href="gonggao.php" class="btn btn-theme">Read More</a>
                    </div>
                </li>
                <li>
                    <img src="images/slides/5.jpg" alt="" />
                    <div class="flex-caption container">
                        <h3>学校地图</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisi.</p>  -->
                        <a href="map.php" class="btn btn-theme">Read More</a>
                    </div>
                </li>
                <li>
                    <img src="images/slides/6.jpg" alt="" />
                    <div class="flex-caption container">
                        <h3>学业规划</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur ersf.</p>  -->
                        <a href="chatgpt.php" class="btn btn-theme">Read More</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end slider -->
    </div>
    <div class="container hero-text2">
        <h3>Lorem ipsum dolor sit amet, ea eum labitur scsstie percipitoleat<br/> fabulas complectitur deterruisset at pro</h3>
    </div>
</section>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        // 在页面加载完成后执行滚动操作
        var element = document.getElementById('content');
        if (element) {
            element.scrollIntoView();
        }
    });
</script>

<?php
include "connect.php";
$username = $_COOKIE['username'];

$sql = "select username,image,gptusage,permission from users where username = '$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$username = $row['username'];
$image = $row['image'];
$gptusage = $row['gptusage'];
$permission = $row['permission'];
$len = strlen($image);
$vip = "";
if ($len < 4){
    $image = 'nulluser.jpg';
}
if ($permission == "0"){
    $vip = "일반 사용자";
}else if($permission == "1"){
    $vip = "인증된 학생";
}else if($permission == "2"){
    $vip = "고급 회원";
}else if($permission == "3"){
    $vip = "상업용 버전";
}

echo "<div class='profile'>";
echo "<img src='image/$image' alt='Avatar' onclick='document.getElementById(\"file-input\").click()'>";
echo "<h1>$username</h1>";
//echo "<p>User Account: $account</p>";
echo "<p>User : $vip</p>";
echo "<p>User Account gpt model usage: $gptusage</p>";
echo "<button onclick='logout()' class='logout-btn'>Logout</button>";
//    echo "<input type='submit' name='submit' class='logout-btn' value='Modify avatar'>";

echo "<form id='content' action='postfile.php' method='post' enctype='multipart/form-data'>
                        <input type='file' name='file' id='file' style='display: none'>
                        <input type='submit' name='submit' class='logout-btn' value='upload avatar'>
                        <a id='notice' href='tips.php'>Tips 하나 올려주세요~</a>
                    </form>";
echo "<input type= 'file' accept='image/*' onchange='replaceAvatar(event)' id='file-input' style='display: none;'>";
echo "</div>";
?>

<script>
    function logout() {
        // 执行退出登录的逻辑
        // 例如，重定向到登录页面或执行其他操作
        window.location = "loginout-.php";
    }
    function replaceAvatar(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('.profile img').src = e.target.result;
            };
            reader.readAsDataURL(file);
            document.getElementById('file').files = event.target.files;
        }
    }

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
