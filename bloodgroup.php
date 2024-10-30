<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System</title>
    <link rel="stylesheet" href="CSS/bloodgroup.css">
</head>
<body>
<div class="container1">
    <h1>Blood_groups</h1>
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

<?php
include("bloodgroup.php");
?>
</body>
</html>