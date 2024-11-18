<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="CSS/admin.css">
    <link rel="icon" href="images/blood drop.png">
</head>
<body>
    <?php
        include("navigation_bar.php");
    ?>
    <div class="container">
        <h1>Admin Login</h1>
        <div class="error">
            <?php
                error_reporting(0);
                session_start();
                session_destroy();
                echo $_SESSION['loginMessage'];
            ?>
        </div>
        <?php
            session_start();
            include("database.php");   
            if(isset($_POST["submit"])){
                $username=$_POST['username'];
                $password=$_POST['password'];

                $sql="select * from admin where username='$username' and password='$password'";
                $res=$db->query($sql);
                if($res->num_rows>0){
                    $row=$res->fetch_assoc();
                    $_SESSION["username"]=$row["username"];
                    $_SESSION["password"]=$row["password"];
                    header("location: dashboard.php");
                }
                else{
                    session_start();
                    $message="Username or Password do not match";
                    $_SESSION['loginMessage']=$message;
                    header("location: admin.php");
                }
            }

        ?>
        <div class="contact-form">
            <form action="admin.php" method="post">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username"><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password"><br>
                <button type="submit" name="submit">Login Here</button>
            </form>
        </div>
    </div>
    
</body>
</html>