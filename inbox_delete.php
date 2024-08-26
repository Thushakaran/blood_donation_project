<?php
    include("database.php");
    session_start();   
    if($_GET['name']){
        $needer_name=$_GET['name'];
        $sql="DELETE FROM `inbox` WHERE full_name='$needer_name'";
        $res=mysqli_query($db,$sql);
        if($res){
            header("location: inbox.php");
        }
    }
    
?>