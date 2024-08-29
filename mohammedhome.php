<?php 
    
    require_once("testimonial.php");
    $sql = "SELECT * FROM dbmohammad";
    $result = $con->query($sql);	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webers</title>
    <link rel="icon" type="image/png" sizes="180x180" href="./assets/logo.png">
    <link rel="stylesheet" href="cvmohammed.css">
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
                    <li class="nav-item"><a href="contact-us.php" class="nav-link">Contact Us</a></li>
                    <li class="nav-item"><a href="services.html" class="nav-link">Get a Service</a></li>
                </ul>
                <div class="nav-icon" onclick="toggleMenu()">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
    </header>
    <section class="home" id="first">
        <div class="home-content">
            <div class="text-container">
            <h3 style="color: red;">Computer Scientist</h3>
            <h1>Hi, I'm <span>Mohammed Freitekh</span> From Webers</h1>
            <p>A forward-thinking Computer Scientist with a keen interest in leveraging computational power to drive innovation and efficiency. With a solid grounding in theoretical principles and a creative approach to problem-solving, aims to develop pioneering solutions that push the boundaries of technology, making significant contributions to the field and society.</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com/" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                <a href="tel:+962798078130" class="phone"><i class="fas fa-phone-alt m-1"></i></a>
                <a href="mailto:moh20180945@std.psut.edu.jo" class="gmail"><i class="fas fa-envelope m-1"></i></a>
                <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/mk_88847/" class="instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
            <img src="./assets/Mohammed.png" alt="Mohammed">
        </div>
        <br> 
        <br>
        </section>
        <section>
            <h1 style="text-align: center; font-size: 30px;">My <span style="color: red;">Skills</span></h1>
            <div class="skills-wrapper">
        <section>
            <div class="technical-skills">
        <div class="container1" id="Skills">
            <h1 class="heading1">Technical Skills</h1>
            <div class="technical-bars">
            <div class="bar"><i style="color: #c95d2e;" class="bx bxl-html5"></i>
                <div class="info">
                <span>HTML</span>
                </div>
                <div class="progress-line html">
                <span data-percent="90%"></span>
                </div>
            </div>
            <div class="bar"><i style="color: #147bbc;" class="bx bxl-css3"></i>
                <div class="info">
                <span>CSS</span>
                </div>
                <div class="progress-line css">
                <span data-percent="70%"></span>
                </div>
            </div>
            <div class="bar"><i style="color: #b0bc1e;" class="bx bxl-javascript"></i>
                <div class="info">
                <span>Javascript</span>
                </div>
                <div class="progress-line javascript">
                <span data-percent="80%"></span>
                </div>
            </div>
            <div class="bar"><i style="color: #c32ec9;" class="bx bxl-python"></i>
                <div class="info">
                    <span>Python</span>
                </div>
                <div class="progress-line python">
                    <span data-percent="75%"></span>
                </div>
                </div>
                <div class="bar"><i style="color: #69bcbc;" class="bx bxl-react"></i>
                <div class="info">
                    <span>React</span>
                </div>
                <div class="progress-line react">
                    <span data-percent="78%"></span>
                </div>
            </div>
            </div>
        </div>
    </div>
        </section>
        <div class="professional-skills">
        <div class="container1">
            <h1 class="heading1">Professional Skills</h1>
            <div class="radial-bars">
                <div class="radial-bar">
                <svg x="0px" y="0px" viewBox="0 0 200 200">
                    <circle class="progrees-bar" cx="100" cy="100" r="80"></circle>
                    <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                </svg>
                <div class="percentage">75%</div>
                <div class="text">Creativety</div>
            </div>
            <div class="radial-bar">
                <svg x="0px" y="0px" viewBox="0 0 200 200">
                    <circle class="progrees-bar" cx="100" cy="100" r="80"></circle>
                    <circle class="path path-2" cx="100" cy="100" r="80"></circle>
                </svg>
                <div class="percentage">87%</div>
                <div class="text">Communication</div>
            </div>
                <div class="radial-bar">
                <svg x="0px" y="0px" viewBox="0 0 200 200">
                    <circle class="progrees-bar" cx="100" cy="100" r="80"></circle>
                    <circle class="path path-3" cx="100" cy="100" r="80"></circle>
                </svg>
                <div class="percentage">76%</div>
                <div class="text">Problem Solving</div>
            </div>
                <div class="radial-bar">
                <svg x="0px" y="0px" viewBox="0 0 200 200">
                    <circle class="progrees-bar" cx="100" cy="100" r="80"></circle>
                    <circle class="path path-4" cx="100" cy="100" r="80"></circle>
                </svg>
                <div class="percentage">84%</div>
                <div class="text">Team Work</div>
            </div>
        </div>
        </div>
        </div>
        </section>
        <br>
        <br>
        <br>
        <div class="contact-me" id="contact-me">
            <h1 style="text-align: center;">Contact <span style="color: red;">Me</span></h1>
            <p style="text-align: center;">Have a question or want to work together? Fill out the form below to contact me!</p>
            <div class="contact-form">
                <form action="mohammad.php" method="POST">
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                    <input type="text" id="subject" name="subject" placeholder="Subject" required>
                    <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn btn-secondary">Send Message</button>
                </form>
            </div>
        </div>
        
        <br>

        <div class="massages">    
            <table id="messagesTable" border="1">
            <tr>
                <th>Name</th>
                <th>Message</th>
            </tr>
            <tr>
                <?php
                while ($row = $result->fetch_assoc() )
                {
                ?>
                <td><?php echo $row["myname"] ?></td>
                <td><?php echo $row["Messages"] ?></td>
    
                </tr>
                <?php
                }
                ?>
            
            </table>
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
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="services.html">Get a Service</a></li>
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
