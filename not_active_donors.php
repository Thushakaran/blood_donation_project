<?php
    session_start();
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Active Donors</title>
    <link rel="stylesheet" href="CSS/not_active_donors.css">
</head>
<body>
    <?php
        include("dashboard_nav.php");
    ?>
    <div class="wrapper">
        <h3 id="heading">Non Active Donors</h3>
        <?php
            $sql="SELECT `Name`, `Father Name`, `Gender`, `D.O.B`, `Blood Group`, `Body Weight`, `Email ID`, `Province`, `District`, `Address`, `Contact Number`, `Last Blood Donated Date`, `New Donor` FROM `donor_register`";
            $res=$db->query($sql);
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
                        echo "</tr>";
                    }
                echo "</table>";
                
                }
            
        ?>
    </div>
</body>
</html>