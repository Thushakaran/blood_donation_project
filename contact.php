<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="Stylesheet"  href="contact.css">
</head>
<body>
    <div class="header">
        <nav>
            <h3 class="navigation">Blood_Share</h3>
            <ul>
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
    <div class="container">
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="submit_form.php">
                <label for="name">Full Name: </label>
                <input type="text" id="name" name="name">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email">
                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea>
                <button type="submit"><i class="fas fa-paper-plane"></i> Send Message</button>
            </form>
        </div>
        <div class="contact-details">
            <h2>Contact Details</h2>
            <p>📍Hospital Road, Jaffna.</p>
            <p>📞P: 0762971306</p>
            <p> 📧E: thushakarant@gmail.com</p>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.querySelector('.menu');
        const navList = document.querySelector('nav ul');

        menuButton.addEventListener('click', function () {
            navList.classList.toggle('show');
        });
    });
    </script>
</body>
</html>