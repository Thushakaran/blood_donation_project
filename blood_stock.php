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
    <title>Blood Stock Management</title>
    <link rel="stylesheet" href="./CSS/blood_stock.css">
</head>
<?php
    include("dashboard_nav.php");
    ?>
<body>
    <div class="container">
        <h2>STOCK (UPDATE)</h2>
        <form action="blood_stock.php" method="POST">
            <label for="blood_type">Blood Group:</label>
            <select name="blood_type" id="blood_type" required>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>

            <label for="action">Action:</label>
            <select name="action" required>
                <option value="increase">Increase</option>
                <option value="decrease">Decrease</option>
            </select>

            <label for="units">Units:</label>
            <input type="number" name="units" id="units" min="1" required>

            <button type="submit">Update</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $blood_type = $_POST['blood_type'];
            $action = $_POST['action'] ?? '';
            $units = intval($_POST['units']);

            $result = $db->query("SELECT `units` FROM blood_stock WHERE blood_type = '$blood_type'");
            $row = $result->fetch_assoc();
            $current_units = $row['units'];

            $new_units = $current_units;

            if ($action === "increase") {
                $new_units = $current_units + $units;
            } elseif ($action === "decrease") {
                $new_units = max(0, $current_units - $units); 
            }

            $sql = $db->query("UPDATE blood_stock SET `units` = $new_units WHERE blood_type = '$blood_type'");
        }

        $sql = "SELECT `blood_type`, `units` FROM `blood_stock`";
        $res = $db->query($sql);
        if ($res->num_rows > 0) {
            echo "<table>
            <thead>
                <tr>
                    <th>Blood Group</th>
                    <th>Units</th>
                </tr>
            </thead>";
            while ($row = $res->fetch_assoc()) {
                echo "<tbody>
                <tr>
                    <td>{$row["blood_type"]}</td>
                    <td>{$row["units"]}</td>
                </tr>
            </tbody>";
            }

            echo "</table>";
        }
        ?>
    </div>
</body>

</html>