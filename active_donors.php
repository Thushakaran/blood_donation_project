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
    <title>Not Active Donors</title>
    <link rel="stylesheet" href="CSS/non_active_donors.css">
    <link rel="icon" href="images/blood drop.png">

</head>
<body>
    <?php
        include("dashboard_nav.php");
    ?>
    <div class="wrapper">
        <h1 id="heading">Active Donors</h1>
        <div>
            <form action="active_donors.php" method="GET">
                <input type="text" name="my_search">
                <input class="button" type="submit" name="search" value="Search"> <br><br>
            </form>
        </div>
        <?php

            if(isset($_GET['search'])){
                $search = $_GET['my_search'];
                $sql = "SELECT * FROM `active_donor_register`WHERE concat(`Name`, ' ', `Father Name`, ' ', `Gender`, ' ', `Blood Group`, ' ', `Province`, ' ', `District`) LIKE '%$search%'";
                $res = $db->query($sql);
            }else{
                $sql="SELECT `Name`, `Father Name`, `Gender`, `D.O.B`, `Blood Group`, `Body Weight`, `Email ID`, `Province`, `District`, `Address`, `Contact Number`, `Last Blood Donated Date`, `New Donor` FROM `active_donor_register`";
                $res=$db->query($sql);
            }  
            if($res->num_rows>0){
                echo "
                    <table>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Gender</th>
                            <th>D.O.B</th>
                            <th>Blood Group</th>
                            <th>Body Weight</th>
                            <th>Email ID</th>
                            <th>Province</th>
                            <th>District</th>
                            <th>Address</th>
                            <th>Contact NUmber</th>
                            <th>Last Blood Donated Date</th>
                            <th>New Donor</th>
                            <th>Delete</th>
                        </tr>
                    ";
                    $i=0;
                    while($row=$res->fetch_assoc()){
                        $i++;
                        echo "<tr>";
                            echo "<td>{$i}</td>";
                            echo "<td>{$row["Name"]}</td>";
                            echo "<td>{$row["Father Name"]}</td>";
                            echo "<td>{$row["Gender"]}</td>";
                            echo "<td>{$row["D.O.B"]}</td>";
                            echo "<td>{$row["Blood Group"]}</td>";
                            echo "<td>{$row["Body Weight"]}</td>";
                            echo "<td>{$row["Email ID"]}</td>";
                            echo "<td>{$row["Province"]}</td>";
                            echo "<td>{$row["District"]}</td>";
                            echo "<td>{$row["Address"]}</td>";
                            echo "<td>{$row["Contact Number"]}</td>";
                            echo "<td>{$row["Last Blood Donated Date"]}</td>";
                            echo "<td>{$row["New Donor"]}</td>";
                            echo "<td><a onClick=\"javascript:return confirm('Are You Sure to Delete this?');\" id='a2' href='active_delete.php?dname={$row["Name"]}'>Delete</a></td>";                            
                        echo "</tr>";
                    }
                echo "</table>";
            }
        ?>
    </div>
</body>
</html>