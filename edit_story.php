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
<title>Edit Stories</title>

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


<li class="nav-item"><a class="page-scroll" href="logout.php">Logout</a></li>


</ul>
</div> <!-- navbar collapse -->
</nav> <!-- navbar -->
</div>
</div> <!-- row -->
</div> <!-- container -->
</div> <!-- navigation -->




</header>

<!--====== HEADER PART ENDS ======-->




       
    


<!--====== ABOUT PART ENDS ======-->



<!--====== CONTACT PART START ======-->

<section id="contact" class="contact-area pt-125 pb-130 gray-bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12">
  	<div class="section-title text-center pb-25">
<h2 class="title">Edit Stories</h2>
<div style="color:#009933" id="show"></div>
<div id="msg" style="color:red;text-align: center;font-weight: bold;font-size:15px;height: 15px;width: auto;"> </div>

<form  name="travelForm" id="travelForm" method="post" class="">
<div id="for">
<div class="single-form">
<input type="text" class="form-control" id="name" name="story_title" value="<?php echo ucfirst($row['story_title']);?>"  placeholder="Story Title"/>
</div> <!-- single form -->
 <div class="single-form">
 <textarea name="description" id="description" placeholder="Description"><?php echo $row['description'];?></textarea>
</div> <!-- single form -->


<div class="form-group">
<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
<input type="hidden" name="user_name" value="<?php echo $_SESSION['user_name'];?>">
<input type="hidden" name="user_type" value="<?php echo $_SESSION['user_type'];?>">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">

<div class="col-sm-4">
<input id="send_travel"   type="button"  value="Update" class="main-btn">
</div>
</div>
</div>
</form>



</div> <!-- section title -->
</div>
</div> <!-- row -->


</div> <!-- container -->
</section>





  


<!--====== CONTACT PART ENDS ======-->





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#send_travel").click(function()
{  
// alert('process'); 


//alert(abc);

var name = $("#name");
if (name.val() == "") {
$( "#msg").text( "Please Enter Your Story Title" );
$("#msg").show();
return false;
// alert("Please Enter Name");
//  return false;
}

var description = $("#description");
if (description.val() == "") {
//  alert("Please Enter Age");

$( "#msg").text( "Please Enter Your Story Description " );
$("#msg").show();

return false;
}





//alert($('#travelForm').serialize());
$.ajax({
type: "POST",
url: "ajax_edit_published.php", 
dataType: "text",
//dataType:'html',  
data: $('#travelForm').serialize(),
//data:{ name: "John", location: "Boston" },

success: function(data){     


$("#show").html(data);
// form.submit();

//  }, 3000); // in milliseconds

$('#name').val('');
$('#description').val('');




}
});	

}); 
});
</script>










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
