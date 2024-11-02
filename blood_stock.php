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
        <div class="content-wrapper">
            <form action="blood_stock.php" method="POST">
                <label for="hospital">Hospital:</label>
                <select name="hospital" id="hospital" required>
                    <option value="Colombo General Hospital">Colombo General Hospital</option>
                    <option value="Sri Jayewardenepura General Hospital">Sri Jayewardenepura General Hospital</option>
                    <option value="National Hospital of Sri Lanka">National Hospital of Sri Lanka</option>
                    <option value="Kandy Teaching Hospital">Kandy Teaching Hospital</option>
                    <option value="Ruhuna University Teaching Hospital">Ruhuna University Teaching Hospital</option>
                    <option value="Jaffna Teaching Hospital">Jaffna Teaching Hospital</option>
                    <option value="Anuradhapura Teaching Hospital">Anuradhapura Teaching Hospital</option>
                    <option value="Batticaloa Teaching Hospital">Batticaloa Teaching Hospital</option>
                    <option value="Negombo General Hospital">Negombo General Hospital</option>
                    <option value="Matara General Hospital">Matara General Hospital</option>
                </select>
                <label for="blood_group">Blood Group:</label>
                <select name="blood_group" id="blood_group" required>
                    <option value="A_positive">A+</option>
                    <option value="A_negative">A-</option>
                    <option value="B_positive">B+</option>
                    <option value="B_negative">B-</option>
                    <option value="O_positive">O+</option>
                    <option value="O_negative">O-</option>
                    <option value="AB_positive">AB+</option>
                    <option value="AB_negative">AB-</option>
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
                $hospital = $_POST['hospital'];
                $blood_group = $_POST['blood_group'];
                $action = $_POST['action'];
                $units = (int)$_POST['units'];

                // Determine the column name for the blood group
                $blood_group_column = str_replace("+", "_positive", str_replace("-", "_negative", $blood_group));

                // Get current stock
                $sql = "SELECT $blood_group_column FROM blood_stock WHERE hospital_name = '$hospital'";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $current_units = (int)$row[$blood_group_column];

                    // Update units
                    if ($action == "increase") {
                        $new_units = $current_units + $units;
                    } elseif ($action == "decrease") {
                        $new_units = max(0, $current_units - $units); // Ensure stock doesn't go negative
                    }

                    // Update the database
                    $update_sql = "UPDATE blood_stock SET $blood_group_column = $new_units WHERE hospital_name = '$hospital'";
                    if ($db->query($update_sql) === TRUE) {
                        echo "Stock updated successfully!";
                    } else {
                        echo "Error updating stock: " . $db->error;
                    }
                } else {
                    echo "Hospital not found.";
                }
            }

            ?>
            <?php
            $sql = "SELECT * FROM `blood_stock`";
            $res = $db->query($sql);
            if ($res->num_rows > 0) {
                echo "
                    <table>
                        <tr>
                            <th>No</th>
                            <th>hospital_name</th>
                            <th>A_positive</th>
                            <th>A_negative</th>
                            <th>B_positive</th>
                            <th>B_negative</th>
                            <th>AB_positive</th>
                            <th>AB_negative</th>
                            <th>O_positive</th>
                            <th>O_negative</th>
                        </tr>
                    ";
                $i = 0;
                while ($row = $res->fetch_assoc()) {
                    $i++;
                    echo "<tr>";
                    echo "<td data-label='No'>{$i}</td>";
                    echo "<td data-label='hospital_name'>{$row["hospital_name"]}</td>";
                    echo "<td data-label='A_positive'>{$row["A_positive"]}</td>";
                    echo "<td data-label='A_negative'>{$row["A_negative"]}</td>";
                    echo "<td data-label='B_positive'>{$row["B_positive"]}</td>";
                    echo "<td data-label='B_negative'>{$row["B_negative"]}</td>";
                    echo "<td data-label='AB_positive'>{$row["AB_positive"]}</td>";
                    echo "<td data-label='AB_negative'>{$row["AB_negative"]}</td>";
                    echo "<td data-label='O_positive'>{$row["O_positive"]}</td>";
                    echo "<td data-label='O_negative'>{$row["O_negative"]}</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "<p class='message'>No Result Found</p>";
            }
            ?>
        </div>

    </div>
</body>

</html>