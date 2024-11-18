<?php
$host = "localhost";
$user = "root";
$password = "Karan@#19jan";
$db_name = "blood_donation";

$db = mysqli_connect($host, $user, $password, $db_name);

if ($db === false) {
    die("Connection Error");
}
