<?php
    session_start();
    include("database.php");

    if(!isset($_SESSION["username"])){
        header("location: admin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Need Blood</title>
</head>
<body>
    <?php
        include("dashboard_nav.php");
    ?>
</body>
</html>