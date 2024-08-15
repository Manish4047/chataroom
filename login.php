<?php
session_start();
include "config.php";
if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $phone=$_POST['phone'];
    
    $sql="select * from users where username='$name' && phone='$phone'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){
        $_SESSION["users"]=$name;
        $_SESSION["phones"]=$phone;
        header("location:index.php");
    }
    else{
        echo "<script>
        alert('invalid user id and password');
        </script>";
    }
}


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatRoom</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="login">
        <h1>ChatRoom</h1>
        <div class="login1">
        <h3>Login</h3>
        <form action="#" method="POST">
            <p> This is the chatroom experiece it through login </p><br>
            <label for="username">Username</label><br>
            <input type="text" name="username" id="" placeholder="short name"> <br><br>
            <label for="username">Mobile No.</label><br>
            <input type="number" min="11111111" max="99999999999" name="phone" id="" placeholder="with country code"> <br><br>
            <button name="submit">Login/Register</button>
        </form>
    </div>
</div>

</body>
</html>