<?php
    session_start();
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Donor Registration</title>
    <link rel="Stylesheet"  href="CSS/donor_register_form.css">
</head>
<body>
    <?php
        include("navigation_bar.php");
    ?>
    <h1>New Donor Registration</h1>
    <div class="error">
        <?php
            error_reporting(0);
            session_start();
            session_destroy();
            echo $_SESSION['message'];
        ?>
    </div>

    <?php
        if(isset($_POST["register"])){
            $name=$_POST['name'];
            $fname=$_POST['fname'];
            $gender=$_POST['gender'];
            $dateofbirth=$_POST['dateofbirth'];
            $blood_group=$_POST['blood_group'];
            $body_weight=$_POST['body_weight'];
            $email=$_POST['email'];
            $province=$_POST['province'];
            $district=$_POST['district'];
            $address=$_POST['address'];
            $contact_no=$_POST['contact_no'];
            $last_blood_donoted_date=$_POST['last_blood_donoted_date'];
            $new_donor=$_POST['new_donor'];

            $sql="INSERT INTO `donor_register`(`Name`, `Father Name`, `Gender`, `D.O.B`, `Blood Group`, `Body Weight`, `Email ID`, `Province`, `District`, `Address`, `Contact Number`, `Last Blood Donated Date`, `New Donor`, `Upload Photo`) VALUES ('$name','$fname','$gender','$dateofbirth','$blood_group','$body_weight','$email','$province','$district','$address','$contact_no','$last_blood_donoted_date','$new_donor','$upload_photo')";
            $res=$db->query($sql);

            if($res){
                session_start();
                $message="Apply Sucessfully";
                $_SESSION['message']=$message;
                header("location: donor_register_form.php");
            }
            else{
                session_start();
                $message="Apply Failed";
                $_SESSION['message']=$message;
                header("location: donor_register_form.php");
            }
        }
    ?>

    <div class="container">
        <form action="donor_register_form.php" method="post" id="form" >
            <h2>JOIN AS BLOOD DONOR</h2><br>
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Full Name">
                <span id="name_error"></span>

            </div>
            <div class="input-group">
                <label for="fname">Father Name</label>
                <input type="text" id="fname" name="fname" placeholder="Father Name">
                <span id="fname_error"></span>
            </div>
            <div class="input-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="girl">Girl</option>  
                </select>
                <span id="gender_error"></span>
            </div>
            <div class="input-group">
                <label for="dateofbirth">D.O.B</label>
                <input type="date" name="dateofbirth" id="dateofbirth" placeholder="Date of birth" min="1900-01-01">
                <span id="dateofbirth_error"></span>
            </div>
            <div class="input-group">
                <label for="blood_group">Blood Group</label>
                <select name="blood_group" id="blood_group">
                    <option value="O+">O+</option>
                </select>
                <span id="blood_group_error"></span>
            </div>
            <div class="input-group">
                <label for="body_weight">Body Weight</label>
                <input type="text" id="body_weight" name="body_weight" placeholder="Weight in Kgs">
                <span id="body_weight_error"></span>
            </div>
            <div class="input-group">
                <label for="email">Email ID</label>
                <input type="text" id="email" name="email" placeholder="Email Address">
                <span id="email_error"></span>
            </div>
            <div  class="input-group">
                <label for="province">Province</label>
                <select name="province" id="province">
                    <option value="Northern">Northern</option>
                    <option value="NorthWestern">NorthWestern</option>
                    <option value="Western">Western</option>
                    <option value="NorthCentral">NorthCentral</option>
                    <option value="Central">Central</option>
                    <option value="Sabaragamuwa">Sabaragamuwa</option>
                    <option value="Eastern">Eastern</option>
                    <option value="Southern">Southern</option>
                </select>
                <span id="province_error"></span>
            </div>
            <div class="input-group">
                <label for="district">District</label>
                <select name="district" id="district">
                    <option value="Jaffna">Jaffna</option>
                    <option value="Kilinochchi">Kilinochchi</option>
                    <option value="Mannar">Mannar</option>
                    <option value="Mullaitivu">Mullaitivu</option>
                    <option value="Vavuniya">Vavuniya</option>
                    <option value="Puttalam">Puttalam</option>
                    <option value="Kurunegala">Kurunegala</option>
                    <option value="Gampaha">Gampaha</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Kalutara">Kalutara</option>
                    <option value="Anuradhapura">Anuradhapura</option>
                    <option value="Polonnaruwa">Polonnaruwa</option>
                    <option value="Matale">Matale</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                    <option value="Kegalle">Kegalle</option>
                    <option value="Ratnapura">Ratnapura</option>
                    <option value="Trincomalee">Trincomalee</option>
                    <option value="Batticaloa">Batticaloa</option>
                    <option value="Ampara">Ampara</option>
                    <option value="Badulla">Badulla</option>
                    <option value="Monaragala">Monaragala</option>
                    <option value="Hambantota">Hambantota</option>
                    <option value="Matara">Matara</option>
                    <option value="Galle">Galle</option>
                </select>
                <span id="district_error"></span>
            </div>
            <div  class="input-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
                <span id="address_error"></span>
            </div>
            <div  class="input-group">
                <label for="contact_no">Contact Number</label>
                <input type="text" id="contact_no" name="contact_no" placeholder="0761234567">
                <span id="contact_no_error"></span>
            </div>
            <div  class="input-group">
                <label for="last_blood_donoted_date">Last Blood donoted Date</label>
                <input type="date" id="last_blood_donoted_date" name="last_blood_donoted_date">
            </div>
            <div  class="input-group">
                <label for="new_donor">New Donor</label>
                <select name="new_donor" id="new_donor">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                <span id="new_donor_error"></span>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="">
                <label for="">I have read the eligibility criteria and confirm that i am eligible to donote blood.</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="">
                <label for="">I agree to the Term and conditions and consent to have my contact and donor information published to the potential blood recipients.</label>
            </div>
            <button type="submit" name="register">Register</button>
        </form>
    </div>
    <script src="javaScript/donor_register_form.js"></script>
</body>
</html>

