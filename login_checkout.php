<?php
    session_start();
    include("database.php");   
    if(isset($_POST["submit"])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql="select * from admin where username='$username' and password='$password'";
        $result=mysqli_query($db,$sql);
        if(mysqli_num_rows($result)>0){
            $row=$res->fetch_assoc();
            $_SESSION["username"]=$row["username"];
            $_SESSION["password"]=$row["password"];
            header("location: inbox.php");
        }
        else{
            echo "Username or Password missing";
        }
    }

?>