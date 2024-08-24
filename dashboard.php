<?php
    session_start();
    include("database.php");

    function countRecord($sql,$db){
        $res=$db->query($sql);
        return $res->num_rows;
    }

    if(!isset($_SESSION["username"])){
        header("location: admin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
    <link rel="stylesheet" href="CSS/dashboard.css">
</head>
<body>
    <?php
        include("dashboard_nav.php");
    ?>
</body>
</html>