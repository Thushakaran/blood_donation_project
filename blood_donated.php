_<?php
    include("database.php");
    session_start();   
    if($_GET['name']){
        $name=$_GET['name'];
        $sql="DELETE FROM `need_blood` WHERE Name='$name'";
        $res=mysqli_query($db,$sql);
        if($res){
            header("location: need_blood.php");
        }
    }
    
?>