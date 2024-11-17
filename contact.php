<?php
session_start();
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="Stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="CSS/navigation_bar.css">
</head>

<body>
    <?php
    include("navigation_bar.php");
    ?>
    <div class="container">
        <div class="contact-form">
            <h2>Send Us a Message</h2>
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
                $full_name = $_POST['name'];
                $phone_number = $_POST['phone'];
                $email = $_POST['email'];
                $hospital = $_POST['hospital'];
                $message = $_POST['message'];

                $sql = "INSERT INTO `inbox`(`full_name`, `phone_number`, `email`,`hospital`, `message`) VALUES ('$full_name','$phone_number','$email','$hospital','$message')";
                $res = $db->query($sql);

                if ($res) {
                    session_start();
                    $message = "Send message Sucessfully";
                    $_SESSION['message'] = $message;
                    header("location: contact.php");
                } else {
                    session_start();
                    $message = "Send message Unsucessfully";
                    $_SESSION['message'] = $message;
                    header("location: contact.php");
                }
            }

            ?>
            <form action="contact.php" method="post" id="form">
                <div class="input-group">
                    <label for="name">Full Name: </label>
                    <input type="text" id="name" name="name">
                    <span id="name_error"></span>
                </div>
                <div class="input-group">
                    <label for="phone">Phone Number:</label>
                    <input type="text" id="phone" name="phone">
                    <span id="phone_error"></span>
                </div>
                <div class="input-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email">
                    <span id="email_error"></span>
                </div>
                <div class="input-group">
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
                        <span id="hospital_error"></span>
                    </select>
                </div>
                <div class="input-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message"></textarea>
                    <span id="message_error"></span>
                </div>
                <div class="input-group">
                    <button type="submit" name="submit"><i class="fas fa-paper-plane"></i> Send Message</button>
                </div>
            </form>
        </div>
        <div class="contact-details">
            <h2>Contact Details</h2>
            <p>📍Hospital Road, Jaffna.</p>
            <p>📞P: 0762971306</p>
            <p> 📧E: thushakarant@gmail.com</p>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>
    <script src="javaScript/contact.js"></script>
</body>

</html>