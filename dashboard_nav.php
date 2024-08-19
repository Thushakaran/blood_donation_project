<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Navigation Bar</title>
    <link rel="stylesheet" href="CSS/dashboard_nav.css">
</head>
<body>
    <div>
    <div class="navbar">
        <a href="#" class="navbar-header"> 💗Blood_share</a>
        <div class="menu">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
        <div class="navbar-item hide">
            <div>
                <ul>
                    <li><a href="dashboard.php"> Dashboard </a></li>
                    <li><a href="home.php"> Logout </a></li>
                </ul>
            </div>
        </div>
    </div>
    <h1>
        Dashboard
    </h1>
    <div class="dashboard_items">
            <a href="inbox.php"> 📥Inbox </a>            
            <a href="search_donors.php"> 🔍Search Donors </a>           
            <a href="active_donors.php"> 👥Active Donors </a>              
            <a href="not_active_donors.php"> 🚫Not Active Donors </a>              
            <a href="need_blood.php"> 🛏️Need Blood </a>
        </ul>                       
    </div>
    <script>
        document.querySelector(".menu").onclick=function(){
            document.querySelector(".navbar-item").classList.toggle("hide");
        }
    </script>
    </div>
</body>
</html>