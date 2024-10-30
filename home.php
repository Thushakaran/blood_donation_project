<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="Stylesheet"  href="CSS/home.css">
</head>
<body>
    <?php
        include("navigation_bar.php");
    ?>
    <div id="container">   
        <div class="image01">
            <img src="images/image 05.jpg" alt="image01" class="im01">
            <div class="text">
                Blood Share <br> Give Blood And Save the World
            </div>
        </div>
        </div>
        
        <br>
        <div class="heading">
                <h1>Online Blood Bank Managment System</h1>
        </div>
        <div class="out_box">
            <div class="box">
                <h2>Donor Registration</h2>
                <p>Join our blood donor community today! Your donation can save lives and make a significant impact on those in need. Register now to become a hero and help ensure a steady supply of blood for hospitals and patients. Your contribution is invaluable. Sign up and donate blood today!</p>
                <button type="submit" name="register" onclick="location.href='donor_register_form.php'">Register Now</a></button>
            </div>
            <div class="box">
                <h2>Need Blood</h2>
                <p>Blood donors needed! Your donation can save lives and provide critical support to those in emergencies. Please consider giving blood to help patients in need. Every drop counts. Join us in making a life-saving difference today.</p>
                <button type="submit" name="view" onclick="location.href='need_blood_form.php'">Request Now</button>
            </div>
            <div class="box">
                <h2>Search Donor</h2>
                <p>Looking for blood donors? Register now to connect with potential donors in your area. By signing up, you can help save lives and ensure a reliable blood supply for those in need. Join our network and make a life-changing impact today!</p>
                <button type="submit" name="search" onclick="location.href='searchDonor.php'">Search donor</button>
            </div>
        </div>
    </div>
    <div class="container1">
    <h1>Lifeline Blood Bank</h1>
<div class="blood-group-container">
     <div class="blood-group-box">
            <h2>A+</h2>
            <p><strong>Can give blood to:</strong> A+, AB+</p>
            <p><strong>Can receive blood from:</strong> A+, A-, O+, O-</p>
        </div>
        <div class="blood-group-box">
            <h2>A-</h2>
            <p><strong>Can give blood to:</strong> A+, A-, AB+, AB-</p>
            <p><strong>Can receive blood from:</strong> A-, O-</p>
        </div>
        <div class="blood-group-box">
            <h2>B+</h2>
            <p><strong>Can give blood to:</strong> B+, AB+</p>
            <p><strong>Can receive blood from:</strong> B+, B-, O+, O-</p>
        </div>
        <div class="blood-group-box">
            <h2>B-</h2>
            <p><strong>Can give blood to:</strong> B+, B-, AB+, AB-</p>
            <p><strong>Can receive blood from:</strong> B-, O-</p>
        </div>
        <div class="blood-group-box">
            <h2>AB+</h2>
            <p>AB+ can receive from all blood types (universal recipient).</p>
        </div>
        <div class="blood-group-box">
            <h2>AB-</h2>
            <p><strong>Can give blood to:</strong> AB+, AB-</p>
            <p><strong>Can receive blood from:</strong> AB-, A-, B-, O-</p>
        </div>
        <div class="blood-group-box">
            <h2>O+</h2>
            <p><strong>Can give blood to:</strong> O+, A+, B+, AB+</p>
            <p><strong>Can receive blood from:</strong> O+, O-</p>
        </div>
        <div class="blood-group-box">
            <h2>O-</h2>
            <p>O- can donate to all types (universal donor).</p>
            <p><strong>Can receive blood from:</strong> O-</p>
        </div>
    </div>
</div>

</body>
</html>
    
</body>
</html>

