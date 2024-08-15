<?php
session_start();
//session_destroy();
if(isset($_SESSION["users"]) && $_SESSION["phones"])
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatroom</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>ChatRoom</h1>
    <div class="chat">
        <header>Welcome to <span><?php echo $_SESSION['users'] ?></span></header>
        <div class="msg">

      </div>
        <div class="input_msg">
        <input type="text" placeholder="Enter any massage" id="input_msg">
        <button onclick="update()">Send</button>
    </div>
    </div>



    
</body>
<script src="script.js"></script>
 

</html>

<?php
}
else{
  header("location:login.php");
}
?>