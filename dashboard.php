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
    <title>Dashboard</title>
    <link rel="stylesheet" href="CSS/dashboard.css">
</head>
<body>
    <?php
        include("dashboard_nav.php");
        function countRecord($sql,$db){
            $res=$db->query($sql);
            return $res->num_rows;
        }
    ?>
    <div id="container">
        <div id="header">
            <h1>Dashboard</h1>
        </div>
        <div id="wrapper" >
            <h2 id="heading">Welcome admin</h2>
            <div id="center">
                <table>
                    <tr>
                        <th>Number of Active Donors</th>
                        <th>Number of Non Active Donors</th>
                        <th>Number of Inbox Messages</th>
                        <th>Number of Need bloods</th>
                    </tr>
                    <tr>
                        <td><?php echo countRecord("SELECT * FROM `active_donor_register`",$db); ?></td>
                        <td><?php echo countRecord("SELECT * FROM `non_active_donor_register`",$db);?></td>
                        <td><?php echo countRecord("SELECT * FROM `inbox`",$db); ?></td>
                        <td><?php echo countRecord("SELECT * FROM `need_blood`",$db); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>



