//add massage to database



<?php
session_start();
include 'config.php';
$msg=$_GET["msg"];
$phone=$_SESSION["phones"];

$sql="select * from users where phone='$phone'";
   $result=mysqli_query($con,$sql);
   if(mysqli_num_rows($result) == 1){

    $sql="INSERT INTO `massage`(`phone`, `msg`) VALUES ('$phone','$msg')";
    $result=mysqli_query($con,$sql);
    if($result){

    }

   }




?>