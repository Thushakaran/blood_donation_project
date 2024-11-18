<?php
session_start();
include("database.php");
?>


<!DOCTYPE html>
<html>

<head>
    <title>need blood</title>
    <link rel="stylesheet" href="CSS/need_blood_form.css">
    <link rel="icon" href="images/blood drop.png">

</head>

<body>
    <?php
    include("navigation_bar.php");
    ?>
    <h1>Need Blood</h1>
    <div class="message">
        <?php
        error_reporting(0);
        session_start();
        session_destroy();
        echo $_SESSION['message'];
        ?>
    </div>

    <?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $blood_group_type = $_POST['blood_group_type'];
        $unit = $_POST['unit'];
        $address = $_POST['address'];
        $dname = $_POST['dname'];
        $rdate = $_POST['rdate'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];
        $reason = $_POST['reason'];

        $sql = "INSERT INTO `need_blood`(`Patient Name`, `Gender`, `Blood Group Type`, `Need Unit of Blood`, `Hospital Address`, `Doctor Name`, `Required Date`, `Email`, `Contact Number`, `Reason`) VALUES 
                ('$name','$gender','$blood_group_type','$unit','$address','$dname','$rdate','$email','$contact_number','$reason')";
        $res = $db->query($sql);

        if ($res) {
            session_start();
            $message = "Request Sucessfully";
            $_SESSION['message'] = $message;
            header("location: need_blood_form.php");
        } else {
            session_start();
            $message = "Apply Failed";
            $_SESSION['message'] = $message;
            header("location: need_blood_form.php");
        }
    }

    ?>

    <div class="container">
        <form action="need_blood_form.php" method="post" id="form">
            <h2>Need Blood To Save Life</h2>
            <div class="input-group">
                <label for="name">Patient Name</label>
                <input type="text" name="name" id="name">
                <span id="name_error"></span>
            </div>
            <div class="input-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <span id="gender_error"></span>
            </div>
            <div class="input-group">
                <label for="blood_group_type">Blood Group Type</label>
                <input type="text" name="blood_group_type" id="blood_group_type">
                <span id="blood_group_type_error"></span>
            </div>
            <div class="input-group">
                <label for="unit">Need Unit Of Blood</label>
                <input type="text" name="unit" id="unit">
                <span id="unit_error"></span>
            </div>
            <div class="input-group">
                <label for="address">Hospital</label>
                <select name="address" id="address" required>
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
                <span id="address_error"></span>
            </div>
            <div class="input-group">
                <label for="dname">Doctor Name</label>
                <input type="text" name="dname" id="dname">
                <span id="dname_error"></span>
            </div>
            <div class="input-group">
                <label for="rdate">Required Date</label>
                <input type="date" name="rdate" id="rdate">
                <span id="rdate_error"></span>
            </div>
            <div class="input-group">
                <label for="email">Email Id</label>
                <input type="text" name="email" id="email">
                <span id="email_error"></span>
            </div>
            <div class="input-group">
                <label for="contact_number">Contact Number</label>
                <input type="text" name="contact_number" id="contact_number">
                <span id="contact_number_error"></span>
            </div>
            <div class="input-group">
                <label for="reason"> Reason For Blood</label>
                <input type="text" name="reason" id="reason">
                <span id="reason_error"></span>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <script src="javaScript/need_blood_form.js"></script>
</body>

</html>