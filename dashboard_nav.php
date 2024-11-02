</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood_share Dashboard</title>
    <link rel="stylesheet" type="text/css" href="CSS/dashboard_nav.css">
</head>

<body>

    
    <header class="header">
        <a href="dashboard.php">Dashboard</a>
        <div class="logout">
            <a href="logout.php">Logout ➡️</a>
=======
    <div class="dashboard_navbar">
        <a href="dashboard.php" class="dashboard_navbar-header"> 💗Dashboard</a>
        <div class="menu">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>

        </div>
        <div class="dashboard_navbar-item hide">
            <ul>
                <li><a href="inbox.php">📥 Inbox</a></li>
                <li><a href="active_donors.php">👥 Active Donors</a></li>
                <li><a href="non_active_donors.php">🚫 Not Active Donors</a></li>
                <li><a href="need_blood.php">🛏️ Need Blood</a></li>
                <li><a href="blood_stock.php">💗 Blood Stock</a></li>
                <li><a href="logout.php">Logout ➡️</a></li>
            </ul>
        </div>
    </div>
    <script>
        document.querySelector(".menu").onclick = function() {
            document.querySelector(".dashboard_navbar-item").classList.toggle("hide");
        }
    </script>
</body>

</html>