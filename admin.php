<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="CSS/admin.css">
</head>
<body>
    <?php
        include("navigation_bar.php");
    ?>
    <div class="container">
        <h1>Admin Login</h1>
        <div class="contact-form">
            <form action="submit_form.php">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username"><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password"><br>
                <button type="submit">Login Here</button>
            </form>
        </div>
    </div>
    
</body>
</html>