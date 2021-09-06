<?php

$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'testproject';


 $connect = mysqli_connect($localhost,$username,$password,$database) or die("connection failed");

//  now check database connection or not using if statement 

 if($connect){
       echo '<script>alert("connection success")</script>';
 }else{
       echo "connection failed";
 }


?>