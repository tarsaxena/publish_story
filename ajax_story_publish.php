<?php

include('db_connect.php');

$date= date("Y/m/d");
  


    $sql ="insert into publish_stories(user_id,user_name,story_title,description,created_at) values('".$_POST['userid']."','".$_POST['username']."','".$_POST['story_title']."','".$_POST['description']."','".$date."')";
    $rs=mysqli_query($conn, $sql);
if($rs){
    echo "Data Successfully Submitted";
    
}






 
  