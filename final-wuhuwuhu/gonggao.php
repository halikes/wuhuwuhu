<?php
include 'connect.php';

$query = "SELECT * FROM gonggao";
$result = $conn->query($query);

$gonggaos = array();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $gonggaos[] = $row;
  }
}
?>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bulletin Board</title>
  <link rel="stylesheet" href="css/gonggao.css" />
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

<body style="background-color: #88d1ff;">

  <header class="header">
    <div class="container">
      <nav class="navbar navbar-inverse" role="navigation">

        <div id="main-nav" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active" id="firstLink"><a href="index.php" class="scroll-link">Home</a></li>
            <li class="active" id="firstLink"><a href="add_announcement.php" class="scroll-link">Add</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <div class="wrap">
    <div class="lnb_wrap">
      <div class="lnb">
        <div class="theme">
          <h1>공지</h1>
        </div>
        <ul>
          <li class="one"><a href="gonggao.php">학사공지 ></a></li>
          <li class="two"><a href="ruxuetongzhi.php">입학공지 ></a></li>
          <li class="three"><a href="jiuyetongzhi.php">취업공지 ></a></li>
          <li class="four"><a href="chuangyetongzhi.php">창업공지 ></a></li>
        </ul>
      </div>
    </div>
    <div class="area">
      <div class="contents">
        <table id="mainGrid" class="dataGridContainer">
          <thead>
            <tr>
              <th style="display:flexbox">Title</th>
              <th style="display:flexbox">Date</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($gonggaos as $gonggao) { ?>
            <tr class="even">
              <td>
                <button class="dropdown-trigger"><?php echo $gonggao['title']?></button>
                <div class="dropdown-content">
                  <?php echo $gonggao['content']?>
                </div>
              </td>
              <td style="text-align:center">
                <?php echo $gonggao['created_at']?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </div>

  </div>







</body>
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
<script src="js/notice.js"></script>

</html>