<?php
if (isset($_COOKIE['username'])){
    $state = "Account";
}else{
    $state = "Login";
}
?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="zh-CN" class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
  <title>HOME PAGE</title>
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
          <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i></i></b></a>
        </div>
        <!--/.navbar-header-->
        <div id="main-nav" class="collapse navbar-collapse">
          <ul class="nav navbar-nav" id="mainNav">
            <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li>
            <li><a href="#services" class="scroll-link">Services</a></li>
            <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
            <li><a href="#plans" class="scroll-link">Plans</a></li>
            <?php
            if($state == "Login"){
                echo "<li><a href='Login.php' class='scroll-link'>Login</a></li>";
            }else{
                echo "<li><a href='userpage.php' class='scroll-link'>Account</a></li>";
            }
            ?>
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
  <section id="services" class="page-section colord">
    <div class="container">
      <div class="row">
        <!-- item -->
        <a href="luntan.php">
          <div class="col-md-3 text-center">
            <div class="b1"> <i class="circle"><img src="images/a1.jpg" /></i>
              <h3>Forum</h3>
              <p>On-campus forum platform for help</p>
            </div>
          </div>
        </a>
        <!-- end: -->

        <!-- item -->
        <a href="map.php">
          <div class="col-md-3 text-center">
            <div class="b1"><i class="circle"> <img src="images/a2.jpg" /></i>
              <h3>Map</h3>
              <p>Map of the school and its surroundings</p>
            </div>
          </div>
        </a>
        <!-- end: -->

        <!-- item -->
        <a href="chatgpt.php">
          <div class="col-md-3 text-center">
            <div class="b1"><i class="circle"> <img src="images/a3.jpg" /></i>
              <h3>GPT</h3>
              <p>Inquire about relevant academic information</p>
            </div>
          </div>
        </a>
        <!-- end: -->

        <!-- item -->
        <a href="gonggao.php">
          <div class="col-md-3 text-center">
            <div class="b1"><i class="circle"> <img src="images/a4.jpg" /></i>
              <h3>공지</h3>
              <p>Latest School Bulletin</p></br>
            </div>
          </div>
        </a>
        <!-- end:-->
      </div>
    </div>
    <!--/.container-->
  </section>
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


  <!-- <section id="work" class="page-section page"  style="display: flex">
    <div class="container text-center">
      <div class="heading">
        <h2>Events</h2>
        <p>Latest Notices on School Activities</p>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="portfolio">
            <ul class="filters list-inline">
              <li> <a class="active" data-filter="*" href="#">All</a> </li>
              <li> <a data-filter=".photography" href="#">Design</a> </li>
              <li> <a data-filter=".branding" href="#">Development</a> </li>
              <li> <a data-filter=".schedule" href="#">schedule</a> </li>
            </ul>
            <ul class="items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">
              <li class="item branding" style="position: absolute; left: 0px; top: 0px;"> <a href="images/work/schedule_may.jpg" class="fancybox"> <img src="images/work/schedule_may.jpg" alt="">
                  <div class="overlay"> <span>Etiam porta</span> </div>
                </a> </li>
              <li class="item photography" style="position: absolute; left: 292px; top: 0px;"> <a href="images/work/schedule_april.jpg" class="fancybox"> <img src="images/work/schedule_april.jpg" alt="">
                  <div class="overlay"> <span>Lorem ipsum</span> </div>
                </a> </li>
              <li class="item branding" style="position: absolute; left: 585px; top: 0px;"> <a href="images/work/3.jpg" class="fancybox"> <img src="images/work/3.jpg" alt="">
                  <div class="overlay"> <span>Vivamus quis</span> </div>
                </a> </li>
              <li class="item photography" style="position: absolute; left: 877px; top: 0px;"> <a href="images/work/4.jpg" class="fancybox"> <img src="images/work/4.jpg" alt="">
                  <div class="overlay"> <span>Donec ac tellus</span> </div>
                </a> </li>
              <li class="item photography" style="position: absolute; left: 0px; top: 219px;"> <a href="images/work/5.jpg" class="fancybox"> <img src="images/work/5.jpg" alt="">
                  <div class="overlay"> <span>Etiam volutpat</span> </div>
                </a> </li>
              <li class="item schedule" style="position: absolute; left: 292px; top: 219px;"> <a href="images/work/schedule-may.jpg" class="fancybox"> <img src="images/work/6.jpg" alt="">
                  <div class="overlay"> <span>Donec congue </span> </div>
                </a> </li>
              <li class="item photography" style="position: absolute; left: 585px; top: 219px;"> <a href="images/work/7.jpg" class="fancybox"> <img src="images/work/7.jpg" alt="">
                  <div class="overlay"> <span>Nullam a ullamcorper diam</span> </div>
                </a> </li>
              <li class="item schedule" style="position: absolute; left: 877px; top: 219px;"> <a href="images/work/schedule-april.jpg" class="fancybox"> <img src="images/work/8.jpg" alt="">
                  <div class="overlay"> <span>Etiam consequat</span> </div>
                </a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <section id="plans" class="page-section">
    <div class="container">
      <div class="heading text-center">
        <!-- Heading -->
        <h2>Our Benefit plans</h2>
            <div><br>
        <div class="row flat">
        <div class="col-lg-3 col-md-3 col-xs-12">
          <ul class="plan plan1">
            <li class="plan-name">일반 사용자 </li>
            <li class="plan-price"> <strong>FREE!</strong> </li>
              <li> <strong>only browse</strong> forum </li>
              <li> <strong>free</strong> map </li>
              <li> <strong>no </strong> GPT </li>
            <li class="plan-action"> <a href="login.php" class="btn btn-danger btn-lg">Join now!</a> </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12">
          <ul class="plan plan2">
            <li class="plan-name">인증된 학생 </li>
            <li class="plan-price"> <strong>FREE!</strong> </li>
              <li> <strong>full</strong> forum </li>
              <li> <strong>free</strong> map </li>
              <li> <strong>10 token </strong> / day</li>
            <li class="plan-action"> <a href="join.php?value=1" class="btn btn-danger btn-lg">Join now!</a> </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12">
          <ul class="plan plan3">
            <li class="plan-name">고급 회원 </li>
            <li class="plan-price"> <strong>$6.99</strong> / month </li>
              <li> <strong>full</strong> forum </li>
              <li> <strong>free</strong> map </li>
              <li> <strong>20 token </strong> / day</li>
            <li class="plan-action"> <a href="join.php?value=2" class="btn btn-danger btn-lg">Join now!</a> </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12">
          <ul class="plan plan4">
            <li class="plan-name">상업용 버전 </li>
            <li class="plan-price"> <strong>$9.99</strong> / month </li>
              <li> <strong>full</strong> forum </li>
              <li> <strong>free</strong> map </li>
              <li> <strong>20 token </strong> / day</li>
            <li class="plan-action"> <a href="join.php?value=3" class="btn btn-danger btn-lg">Join now!</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="clients">
    <div id="demo" class="clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="customNavigation"> <a class="prev"><i class="fa fa-chevron-circle-left"></i></a> <a class="next"><i class="fa fa-chevron-circle-right"></i></a> </div>
            <div id="owl-demo" class="owl-carousel">
              <div class="item"> <span class="helper"> <img src="images/clients/client-1.png" alt="client" /></span> </div>
              <div class="item"> <span class="helper"> <img src="images/clients/client-2.png" alt="client" /></span> </div>
              <div class="item"> <span class="helper"> <img src="images/clients/client-3.png" alt="client" /></span> </div>
              <div class="item"> <span class="helper"> <img src="images/clients/client-4.png" alt="client" /></span> </div>
              <div class="item"> <span class="helper"> <img src="images/clients/client-5.png" alt="client" /></span> </div>
              <div class="item"> <span class="helper"> <img src="images/clients/client-6.png" alt="client" /></span> </div>
              <div class="item"> <span class="helper"> <img src="images/clients/client-7.png" alt="client" /></span> </div>
              <div class="item"> <span class="helper"> <img src="images/clients/client-8.png" alt="client" /></span> </div>
              <div class="item"> <span class="helper"> <img src="images/clients/client-9.png" alt="client" /></span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="aboutUs">
    <div class="container">
      <div class="heading text-center">
        <!-- Heading -->
        <h2>About Us</h2>
        <p>International student help platform</p>
      </div>
      <div class="row feature design">
        <div class="area1 columns right">
          <h4>Better accurate help service</h4>
          <p>This website is a school-based help platform for international students. This website aims to help international students in Korea adapt to school life faster and make it easier for international students to obtain school announcements and information. </p>
        </div>
        <div class="area2 columns feature-media left"> <img src="images/feature-img-1.png" alt="" width="100%"> </div>
      </div>

    </div>

  </section>

  <section id="contactUs" class="contact-parlex">
    <div class="parlex-back">
      <div class="container">
        <div class="row">
          <div class="heading text-center">
            <!-- Heading -->
            <h2>Contact Us</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
          </div>
        </div>
        <div class="row mrgn30">
          <form method="post" action="" id="contactfrm" role="form">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
              </div>
              <div class="form-group">
                <label for="comments">Comments</label>
                <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
                <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
              </div>
              <div class="result"></div>
            </div>
          </form>
        </div>
      </div>
      <!--/.container-->
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="col">
            <h4>Contact us</h4>
            <ul>
              <li>1th Avenue, New York - United States</li>
              <li>Phone: +22 342 2345 345 | Fax: +22 724 2342 343 </li>
              <li>Email: <a href="mailto:info@example.com" title="Email Us">info@example.com</a></li>
              <li>Skype: <a href="skype:my.test?call" title="Skype us">my-company</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-3">
          <div class="col">
            <h4>Mailing list</h4>
            <p>Lorem ipsum dolor sit amet, ea eum labitur scsstie percipitoleat.</p>
            <form class="form-inline">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Your email address...">
                <span class="input-group-btn">
                  <button class="btn" type="button">Go!</button>
                </span>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-3">
          <div class="col col-social-icons">
            <h4>Follow us</h4>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-flickr"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-skype"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="col">
            <h4>Latest News</h4>
            <p>
              Lorem ipsum dolor labitur scsstie per sit amet, ea eum labitur scsstie percipitoleat.
              <br><br>
              <a href="#" class="btn">Get Mores!</a>
            </p>
          </div>
        </div>
      </div>

    </div>

  </footer>
  <!--/.page-section-->
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