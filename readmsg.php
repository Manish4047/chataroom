

<?php
session_start();
include "config.php";
$sql="select * from massage";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
    if($row['phone']==$_SESSION['phones']){
        ?>

        <p class="sender">
            <span><?php echo $row['phone'] ?></span>
            <span><?php echo $row['msg'] ?></span>
        </p>
        
        
        <?php
    }else{
    ?>

<p>
    <span><?php echo $row['phone'] ?></span>
    <span><?php echo $row['msg'] ?></span>
</p>


<?php
}
}
}else{
    echo "</h3>chat is empty at this moment</h3> ";
}


?>
