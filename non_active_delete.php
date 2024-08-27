<?php
    include("database.php");
    session_start();  
    
    if($_GET['dname']){
        $donor_name=$_GET['dname'];
        $sql="DELETE FROM `non_active_donor_register` WHERE Name='$donor_name'";
        $res=mysqli_query($db,$sql);
        if($res){
            header("location: non_active_donors.php");
        }
    }
    
?>