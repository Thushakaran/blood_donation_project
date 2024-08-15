<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container">
        <div>
            <nav>
                <h3 class="navigation">Blood_Share</h3>
                <ul id="nav-menu">
                    <li><a href="home.php"> 🏠Home | </a></li>
                    <li><a href="about.php"> 🔎About Us | </a></li>
                    <li><a href="services.php"> 📼Services | </a></li>
                    <li><a href="contact.php"> 📞Contact Us | </a></li>
                    <li><a href="admin.php"> 👨‍✈️Admin | </a></li>
                </ul>
                <div class="menu">
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                </div>
            </nav>
        </div>
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