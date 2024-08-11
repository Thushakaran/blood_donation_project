<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="Stylesheet"  href="home.css">
</head>
<body>
    <div id="container">
        <div>
            <nav>
                <h3 class="navigation">Blood_Share</h3>
                <ul id="nav-menu">
                    <li> 🏠Home | </li>
                    <li> 🔎About Us | </li>
                    <li> 📼Services | </li>
                    <li> 📞Contact Us | </li>
                    <li> 👨‍✈️Admin</li>
                </ul>
                <div class="menu">
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                </div>
            </nav>
        </div>
        <div class="image01">
            <img src="image 05.jpg" alt="image01" class="im01">
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
                <button>Register Now</a></button>
            </div>
            <div class="box">
                <h2>Need Blood</h2>
                <p>Blood donors needed! Your donation can save lives and provide critical support to those in emergencies. Please consider giving blood to help patients in need. Every drop counts. Join us in making a life-saving difference today.</p>
                <button>View more</button>
            </div>
            <div class="box">
                <h2>Search Donor</h2>
                <p>Looking for blood donors? Register now to connect with potential donors in your area. By signing up, you can help save lives and ensure a reliable blood supply for those in need. Join our network and make a life-changing impact today!</p>
                <button>Search donor</button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.getElementById('menu-toggle');
            const navMenu = document.getElementById('nav-menu');

            menuToggle.addEventListener('click', () => {
                if (navMenu.style.display === 'flex') {
                    navMenu.style.display = 'none';
                } else {
                    navMenu.style.display = 'flex';
                }
            });
        });
    </script>
</body>
</html>