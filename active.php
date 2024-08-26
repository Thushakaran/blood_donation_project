<?php
    include("database.php");
    session_start();   
    if($_GET['dname']){
        $donor_name=$_GET['dname'];
        $donor_fname=$_GET['fn'];
        $donor_gender=$_GET['gender'];
        $donor_dob=$_GET['dob'];
        $donor_bg=$_GET['bg'];
        $donor_bw=$_GET['bw'];
        $donor_eid=$_GET['eid'];
        $donor_pro=$_GET['pro'];
        $donor_district=$_GET['dis'];
        $donor_ad=$_GET['ad'];
        $donor_cno=$_GET['cno'];
        $donor_lbdd=$_GET['lbdd'];
        $donor_nd=$_GET['nd'];
        $sql="INSERT INTO `active_donor_register`(`Name`, `Father Name`, `Gender`, `D.O.B`, `Blood Group`, `Body Weight`, `Email ID`, `Province`, `District`, `Address`, `Contact Number`, `Last Blood Donated Date`, `New Donor`) VALUES 
        ('$donor_name','$donor_fname','$donor_gender','$donor_dob','$donor_bg','$donor_bw','$donor_eid','$donor_pro','$donor_district','$donor_ad','$donor_cno','$donor_lbdd','$donor_nd')";
        $sql1="DELETE FROM `non_active_donor_register` WHERE Name='$donor_name'";
        $res=mysqli_query($db,$sql);
        $res1=mysqli_query($db,$sql1);
        if($res && $res1){
            header("location: non_active_donors.php");
        }
    }
?>

