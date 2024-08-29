
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Webers</title>
        <link rel="icon" type="image/png" sizes="180x180" href="./assets/logo.png">
        <link rel="stylesheet" href="cu.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css" integrity="sha384-..." crossorigin="anonymous">
    </head>

<body>
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <a href="home.php" class="nav-logo"><img src="./assets/logo.png" alt="Your Logo"></a>
                <ul class="nav-menu" id="nav-menu">
                    <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#first" class="nav-link">Contact Us</a></li>
                    <li class="nav-item"><a href="services.html" class="nav-link">Get a Service</a></li>
                </ul>
                <div class="nav-icon" onclick="toggleMenu()">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
    </header>
<div class="form-container" id="first">
    <h1 style="text-align: center;"  id="formadrees">Contact Us</h1>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" id="name" name="name" placeholder="First" 
            value ="<?php if (isset($_COOKIE["user"])) echo $_COOKIE["user"];else echo "";?>" required>
            <input type="text" name="surname" placeholder="Last" value ="<?php if (isset($_COOKIE["last"])) echo $_COOKIE["last"];else echo "";?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address *</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="business">Business Name</label>
            <input type="text" id="business" name="business">
        </div>
        <div class="form-group">
            <label for="phone-number">Phone Number *</label>
            <input type="tel" name="phone" placeholder="+966">
        </div>
        <div class="form-group">
            <select name="inquiryType">
                <option value="">Reason for Contacting</option>
                <option value="service">Service Inquiry</option>
                <option value="support">Support Request</option>
                <option value="feedback">Feedback</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="details">Your Message *
                <p>Don't be afraid to be specific!</p>
            </label>
            <textarea id="details" name="details" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit">SUBMIT</button>
        </div>
        </form>
</div>
<footer class="site-footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-about">
                <h3>Webers</h3>
                <p>We are dedicated to providing innovative web solutions to clients worldwide. Our passion drives us to deliver exceptional designs and scalable development.</p>
            </div>
            <div class="footer-nav">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#first">Contact Us</a></li>
                    <li><a href="services.html">Get s Service</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <ul>
                    <li><a href="mailto:contact@webers.com" class="footer-link"><i class="fas fa-envelope"></i> contact@webers.com</a></li>
                    <li><a href="tel:+1234567890" class="footer-link"><i class="fas fa-phone"></i> +123 456 7890</a></li>
                    <li><a href="https://www.google.com/maps/search/?api=1&query=Business+Park,+Amman,+Jordan" target="_blank" class="footer-link"><i class="fas fa-map-marker-alt"></i>  Business Park, Amman, Jordan</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>©2024 Webers. All rights reserved.</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/" class="instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
<script>
    function toggleMenu() {
        const navMenu = document.getElementById('nav-menu');
        navMenu.classList.toggle('active');
    }
</script>
</body>
</html>