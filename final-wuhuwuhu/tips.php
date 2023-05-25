
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
    <title>Agile Agency Free Bootstrap Web Template</title>
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
        .input-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        #user-input {
            width: 50%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #send-button {
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        .row {
            display: flex;
        }

        .login__form {
            flex: 1;
            padding: 20px;
        }

        .login__register {
            text-align: center;
            margin-top: 20px;
        }

        .login__register h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .login__register .primary-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .primary-btn {
            margin-left: -250px;
        }

        .login__form h3 {
            font-size: 35px;
            margin-bottom: 20px;
        }

        .input__item {
            margin-bottom: 15px;
        }

        .input__item input {
            width: 60%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .site-btn {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
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
        <h3>Tips 하나 공유하겠습니다. (한국어 학습/학교 내 활동/수업 관련)</h3>
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
<!--gpt部分-->
<section id="content" class="page-section colord">
    <div class="container">
        <div class="chat-wrapper">
            <div id="chat-container"></div>
            <form class="input-container" method="POST" action="tips-.php">
                <input id="user-input" type="text" name="message" placeholder="Tips 입력">
                <button type="submit" id="send-button">Send</button>
            </form>
        </div>
    </div>
</section>


<div class="testimonial-area" style="height: 180px !important;">
    <div class="testimonial-solid">
        <div class="container">
            <div class="testi-icon-area">
                <div class="quote">
                    <i class="fa fa-microphone"></i>
                </div>
            </div>
            <div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
                <div class='carousel-inner'>
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

//                    ?>
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
