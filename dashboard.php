<?php
session_start();


include("header.php");?>

<!--====== HEADER PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about" class="about-area pt-125 pb-130">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="section-title text-center">
<h2 class="title">All Stories</h2>

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
            url: "getPageData.php",
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



<!--====== CONTACT PART START ======-->

<section id="contact" class="contact-area pt-125 pb-130 gray-bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12">
  	<div class="section-title text-center pb-25">
<h2 class="title">Publishing Stories</h2>
<div id="msg" style="color:red;text-align: center;font-weight: bold;font-size:15px;height: 15px;width: auto;"> </div>
<div style="color:#009933" id="show"></div>

<form  name="story_publish" id="story_publish" method="post">
<div class="single-form">
<input type="text" class="form-control" id="name" name="story_title"  placeholder="Story Title"/>
</div> <!-- single form -->
 <div class="single-form">
 <textarea name="description" id="description" placeholder="Description"></textarea>
</div> <!-- single form -->


<div class="form-group">
<input type="hidden" name="userid" value="<?php echo $_SESSION['user_id'];?>">
<input type="hidden" name="username" value="<?php echo $_SESSION['user_name'];?>">
<input type="hidden" name="user_type" value="<?php echo $_SESSION['user_type'];?>">
<div class="col-sm-4">
<input id="story_pub"   type="button"  value="Search" class="main-btn">
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
$("#story_pub").click(function()
{  
//alert('process'); 


//alert(abc);

var name = $("#name");
if (name.val() == "") {
$( "#msg").text( "Please Enter Your Story Title" );
$("#msg").show();
return false;

}

var description = $("#description");
if (description.val() == "") {
$( "#msg").text( "Please Enter Your Story Description " );
$("#msg").show();
return false;
}





//alert($('#travelForm').serialize());
$.ajax({
type: "POST",
url: "ajax_story_publish.php", 
dataType: "text",
//dataType:'html',  
data: $('#story_publish').serialize(),
//data:{ name: "John", location: "Boston" },

success: function(data){     

//alert(data);

$("#show").html(data);
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
