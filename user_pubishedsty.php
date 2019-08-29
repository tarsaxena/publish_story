<?php
session_start();

include('db_connect.php');


//for delete a story
if(!empty($_REQUEST['del_id'])){
   $sql = "delete  FROM publish_stories WHERE id =".$_REQUEST['del_id'];
   $result = mysqli_query($conn, $sql) or die(mysqli_error($connection));
  }

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
<li class="nav-item active"><a class="page-scroll" href="#home">Home</a></li>
<li class="nav-item"><a class="page-scroll" href="#about">All Stories</a></li>
<li class="nav-item"><a class="page-scroll" href="#contact">Published Stories</a></li>


</ul>
</div> <!-- navbar collapse -->
</nav> <!-- navbar -->
</div>
</div> <!-- row -->
</div> <!-- container -->
</div> <!-- navigation -->


</div> <!-- header shape -->

</div> <!-- header shape -->
<div class="container">
<div class="row align-items-center">
<div class="col-xl-5 col-lg-6">
<div class="header-content-right">
<h4 class="sub-title">Hello,</h4>
<!-- <h1 class="title"><?php echo $_SESSION['login_user'];?></h1>
<p>Works As <b><?php echo ucfirst($_SESSION['user_type']);?></b></p>
<a class="main-btn" href="user_pubishedsty.php">View my Work</a> -->
</div> <!-- header content right -->
</div>
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

<section id="about" class="about-area pt-125 pb-130">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="section-title text-center">
<h2 class="title">All Stories By <?php echo $_SESSION['user_name'];?></h2>

<div class="row">
<div class="col-lg-12>
<div class="about-content mt-50">
      <div id="inner-container">

            <div id="results"></div>
            <div id="loader"></div>

        </div>
<ul class="clearfix">
<li>

</div> <!-- row -->

</div> <!-- section title -->
</div>
</div> <!-- row -->



       
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript">
    function showRecords(perPageCount, pageNumber) {
        $.ajax({
            type: "GET",
            url: "getUserData.php",
            data: "pageNumber=" + pageNumber,
            cache: false,
    		beforeSend: function() {
                $('#loader').html('<img src="loader.png" alt="reload" width="20" height="20" style="margin-top:10px;">');
    			
            },
            success: function(html) {
                $("#results").html(html);
                $('#loader').html(''); 

            }
        });
    }
    
    $(document).ready(function() {
        showRecords(10, 1);
    });
</script>

</div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->









<style>
.search_button {
display: block;
padding: 10px 20px;
background: #ccc;
cursor: pointer;
}
#loadingProgressG {
display: none;
}
</style>
























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
