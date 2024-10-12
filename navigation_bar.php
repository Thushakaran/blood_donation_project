<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/navigation_bar.css">
</head>
<body>
    <div class="navbar">
        <a href="#" class="navbar-header"> 💗Blood_share</a>
        <div class="menu">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
        <div class="navbar-item hide">
            <ul>
                <li><a href="home.php"> 🏠Home | </a></li>
                <li><a href="about.php"> 🔎About Us | </a></li>
                <li><a href="contact.php"> 📞Contact Us | </a></li>
                <li><a href="admin.php"> 👨‍✈️Admin | </a></li>
            </ul>
        </div>
    </div>
    <script>
        document.querySelector(".menu").onclick=function(){
            document.querySelector(".navbar-item").classList.toggle("hide");
        }
    </script>
</body>
</html>