<?php
    session_start();
    include('db_connect.php');

 $sql = "SELECT * FROM publish_stories WHERE id =".$_REQUEST['id'] ;
 $result = mysqli_query($conn, $sql) or die(mysqli_error($connection));
 $row =mysqli_fetch_assoc($result);
 ?>
<!doctype html>
<html lang="en">

<head>

<!--====== Required meta tags ======-->
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--====== Title ======-->
<title>Publishing Stories</title>

<!--====== Favicon Icon ======-->
<link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

<!--====== Bootstrap css ======-->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<!--====== Line Icons css ======-->
<link rel="stylesheet" href="assets/css/LineIcons.css">

<!--====== Magnific Popup css ======-->
<link rel="stylesheet" href="assets/css/magnific-popup.css">

<!--====== Default css ======-->
<link rel="stylesheet" href="assets/css/default.css">

<!--====== Style css ======-->
<link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

<!--====== PRELOADER PART START ======-->

<div class="preloader">
<div class="loader_34">
<div class="ytp-spinner">
<div class="ytp-spinner-container">
<div class="ytp-spinner-rotator">
<div class="ytp-spinner-left">
<div class="ytp-spinner-circle"></div>
</div>
<div class="ytp-spinner-right">
<div class="ytp-spinner-circle"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<!--====== PRELOADER ENDS START ======-->

<!--====== HEADER PART START ======-->

<header id="home" class="header-area">
<div class="navigation fixed-top">
<div class="container">
<div class="row">
<div class="col-lg-12">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="dashboard.php">
Publishing Stories 
</a> <!-- Logo -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto">

<li class="nav-item"><a class="page-scroll" href="logout.php">Logout</a></li>


</ul>
</div> <!-- navbar collapse -->
</nav> <!-- navbar -->
</div>
</div> <!-- row -->
</div> <!-- container -->
</div> <!-- navigation -->


</div> <!-- header shape -->
<div class="container">
<div class="row align-items-center">
<div class="col-xl-5 col-lg-6">

<div class="col-lg-6 offset-xl-1">
<div class="header-image d-none d-lg-block">

</div> <!-- header image -->
</div>
</div> <!-- row -->
</div> <!-- container -->
<div class="header-social">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="header-social-icon">
<ul>
<li><a href="#"><i class="lni-facebook-filled"></i></a></li>
<li><a href="#"><i class="lni-twitter-original"></i></a></li>
<li><a href="#"><i class="lni-behance-original"></i></a></li>
<li><a href="#"><i class="lni-linkedin-original"></i></a></li>
</ul>
</div> <!-- header social -->
</div>
</div> <!-- row -->
</div> <!-- container -->
</div> <!-- header social -->
</div> <!-- header content -->
</header>

<!--====== HEADER PART ENDS ======-->

<!--====== ABOUT PART START ======-->



<!--====== ABOUT PART ENDS ======-->



<!--====== CONTACT PART START ======-->




<section id="contact" class="contact-area pt-125 pb-130 gray-bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12">
  	<div class="section-title text-center pb-25">
<h2 class="title">View Stories</h2>


<div style="color:#009933" id="show"></div>
<div id="msg" style="color:red;text-align: center;font-weight: bold;font-size:15px;height: 15px;width: auto;"> </div>

<form  name="travelForm" id="travelForm" method="post" class="">
<div id="for">
<div class="single-form">
<input type="text" class="form-control" id="name" name="story_title" value="<?php echo ucfirst($row['story_title']);?>" placeholder="Story Title"/>
</div> <!-- single form -->
 <div class="single-form">
 <textarea name="description" id="description" placeholder="Description" ><?php echo $row['description'];?></textarea>
</div> <!-- single form -->

</div>
</form>



</div> <!-- section title -->
</div>
</div> <!-- row -->


</div> <!-- container -->
</section>





  














<!--====== FOOTER PART START ======-->

<footer id="footer" class="footer-area">
<div class="footer-widget pt-130 pb-130">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="footer-content text-center">

</div> <!-- footer content -->
</div>
</div> <!-- row -->
</div> <!-- container -->
</div> <!-- footer widget -->
<div class="footer-copyright pb-20">

</div> <!-- footer widget -->
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->







<!--====== jquery js ======-->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>

<!--====== Magnific Popup js ======-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!--====== Parallax js ======-->
<script src="assets/js/parallax.min.js"></script>

<!--====== Counter Up js ======-->
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>


<!--====== Appear js ======-->
<script src="assets/js/jquery.appear.min.js"></script>

<!--====== Scrolling js ======-->
<script src="assets/js/scrolling-nav.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>


<!--====== Main js ======-->
<script src="assets/js/main.js"></script>

</body>

</html>
