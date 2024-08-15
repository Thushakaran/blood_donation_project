<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Donor Registration</title>
    <link rel="Stylesheet"  href="donor_register_form.css">
</head>
<body>
    <div>
        <nav>
            <h3 class="navigation">Blood_Share</h3>
            <ul>
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
    <i class="admin"></i>
    <h1>New Donor Registration</h1>
    <div class="container">
        <form action="" id="form">
            <h2>JOIN AS BLOOD DONOR</h2>
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Full Name">

            </div>
            <div class="input-group">
                <label for="fname">Father Name</label>
                <input type="text" id="fname" name="fname" placeholder="Father Name">
            </div>
            <div class="input-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="girl">Girl</option>  
                </select>
            </div>
            <div class="input-group">
                <label for="dateofbirth">D.O.B</label>
                <input type="date" name="dateofbirth" id="dateofbirth" placeholder="Date of birth" min="1900-01-01">
            </div>
            <div class="input-group">
                <label for="blood_group">Blood Group</label>
                <select name="blood_group" id="blood_group">
                    <option value=""></option>
                </select>
            </div>
            <div class="input-group">
                <label for="body_weight">Body Weight</label>
                <input type="text" id="body_weight" name="body_weight" placeholder="Weight in Kgs">
            </div>
            <div class="input-group">
                <label for="email">Email ID</label>
                <input type="text" id="email" name="email" placeholder="Email Address">
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
            </div>
            <div  class="input-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
            </div>
            <div  class="input-group">
                <label for="contact_no">Contact Number</label>
                <input type="text" id="contact_no" name="contact_no" placeholder="0761234567">
            </div>
            <div  class="input-group">
                <label for="last_blood_donoted_date">Last Blood donoted Date</label>
                <input type="date" id="Last Blood donoted Date" name="last_blood_donoted_date">
            </div>
            <div  class="input-group">
                <label for="new_donor">New Donor</label>
                <select name="new_donor" id="new_donor">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="input-group">
                <label for="upload_photo">Upload Photo</label>
                <input type="file" id="upload_photo" name="upload_photo">
            </div>
            <div class="checkbox">
                <input type="checkbox" id="">
                <label for="">I have read the eligibility criteria and confirm that i am eligible to donote blood.</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="">
                <label for="">I agree to the Term and conditions and consent to have my contact and donor information published to the potential blood recipients.</label>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const menu = document.querySelector('.menu');
        const navLinks = document.querySelector('nav ul');

        menu.addEventListener('click', () => {
        console.log('Menu clicked');
        navLinks.classList.toggle('active');
        });
        });
    </script>
</body>
</html>