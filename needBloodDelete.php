_<?php
    include("database.php");
    session_start();   
    if($_GET['pname']){
        $pname=$_GET['pname'];
        $sql="DELETE FROM `need_blood` WHERE `Patient Name`='$pname'";
        $res=mysqli_query($db,$sql);
        if($res){
            header("location: need_blood.php");
        }
    }
    
?>