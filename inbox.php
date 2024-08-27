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
    <title>Inbox</title>
    <link rel="stylesheet" href="CSS/inbox.css">
</head>
<body>
    <?php
        include("dashboard_nav.php");
    ?>
     <div class="wrapper">
        <h1 id="heading">Inbox</h1>
        <?php
            $sql="SELECT `full_name`, `phone_number`, `email`, `message` FROM `inbox`";
            $res=$db->query($sql);
            if($res->num_rows>0){
                echo "
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Delete</th>                           
                        </tr>
                    ";
                    $i=0;
                    while($row=$res->fetch_assoc()){
                        $i++;
                        echo "<tr>";
                            echo "<td>{$i}</td>";
                            echo "<td>{$row["full_name"]}</td>";
                            echo "<td>{$row["phone_number"]}</td>";
                            echo "<td>{$row["email"]}</td>";
                            echo "<td>{$row["message"]}</td>";
                            echo "<td><a onClick=\"javascript:return confirm('Are You Sure to Delete this?');\" id='a2' href='inbox_delete.php? name={$row["full_name"]}'>Delete</a></td>";
                        echo "</tr>";
                    }
                echo "</table>";
            }
        ?>
    </div>
</body>
</html>