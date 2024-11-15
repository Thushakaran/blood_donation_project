<?php
session_start();
include("database.php");

if (!isset($_SESSION["username"])) {
    header("location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Need Blood</title>
    <link rel="stylesheet" href="CSS/need_blood.css">
</head>

<body>
    <?php
    include("dashboard_nav.php");
    ?>
    <div class="wrapper">
        <h1 id="heading">Blood Requests</h1>
        <?php
        $sql = "SELECT `Patient Name`, `Gender`, `Blood Group Type`, `Need Unit of Blood`, `Hospital Address`, `Doctor Name`, `Required Date`, `Email`, `Contact Number`, `Reason` FROM `need_blood`";
        $res = $db->query($sql);
        if ($res->num_rows > 0) {
            echo "
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Patient Name</th>
                                <th>Gender</th>
                                <th>Blood Group Type</th>
                                <th>Need Unit Of Blood</th>
                                <th>Hospital Address</th>
                                <th>Doctor Name</th>
                                <th>Required Date</th>
                                <th>Email Id</th>
                                <th>Contact Number</th>
                                <th>Reason For Blood</th>
                                <th>Delete</th>
                            </tr>
                        ";
            $i = 0;
            while ($row = $res->fetch_assoc()) {
                $i++;
                echo "<tr>";
                echo "<td>{$i}</td>";
                echo "<td>{$row["Patient Name"]}</td>";
                echo "<td>{$row["Gender"]}</td>";
                echo "<td>{$row["Blood Group Type"]}</td>";
                echo "<td>{$row["Need Unit of Blood"]}</td>";
                echo "<td>{$row["Hospital Address"]}</td>";
                echo "<td>{$row["Doctor Name"]}</td>";
                echo "<td>{$row["Required Date"]}</td>";
                echo "<td>{$row["Email"]}</td>";
                echo "<td>{$row["Contact Number"]}</td>";
                echo "<td>{$row["Reason"]}</td>";
                echo "<td><a onClick=\"javascript:return confirm('Are sure that did donate?');\" id='a' href='needBloodDelete.php?pname={$row["Patient Name"]}'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='message'>No needs Found</p>";
        }
        ?>
    </div>

</body>

</html>