<?php

 $con = mysqli_connect("localhost","root","","kino");

 if(mysqli_connect_errno()){
  
  echo"Failed to connect : " . mysqli_connect_error(); 
  
}


function getip(){

   $ip = $_SERVER['REMOTE_ADDR'];


   if(!empty($_SERVER['HTTP_CLIENT_IP'])){
     
     $ip = $_SERVER['HTTP_CLIENT_IP'];


   }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){

     $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];


   }

    return $ip;
}


?>