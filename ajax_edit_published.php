<?php
//session_start();
include('db_connect.php');

$date= date("Y/m/d");
  




 $sql ="update publish_stories set user_id ='".$_POST['user_id']."',
                                     user_name ='".$_POST['user_name']."',
                                     story_title ='".$_POST['story_title']."',
                                     description ='".$_POST['description']."',
                                     update_date ='".$date."'
                  where id ='".$_POST['id']."'   " ;     

$rs=mysqli_query($conn, $sql);

if($rs){
    echo "Data Updated Submitted";
    
}






 
  