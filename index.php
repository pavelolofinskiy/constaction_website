<!DOCTYPE html >
<html lang="en" id='home'>
<head>
    <link rel="stylesheet" href="css\reset.css?version=432145">
    <link rel="stylesheet" href="css\main.css?version=443764">
    <link rel="stylesheet" href="css\hero-section.css?version=4432134344">
    <link rel="stylesheet" href="css\second-section.css?version=123334">
    <link rel="stylesheet" href="css\third-section.css?version=34531ads445">
    <link rel="stylesheet" href="css\contact-section.css">  
    <link rel="stylesheet" href="css\footer.css">  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanRise</title>
</head>
  
<body>

<header class="my-header">
        <h1 class="my-logo-div-p">Urban<span class="my-logo-div-span">Rise</span></h1>


        <nav class="my-header-nav">
            <a class="nav-menu" href="#home">Home</a>
            <a class="nav-menu" href="#about">About</a>
            <a class="nav-menu" href="#projects">Projects</a>
            <a class="nav-menu" href="#contact">Contact</a>
        </nav>
        

        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
            <span></span>
            </label>

            <ul class="menu__box">
            <li><a class="menu__item" href="#home">Home</a></li>
            <li><a class="menu__item" href="#about">About</a></li>
            <li><a class="menu__item" href="#projects">Projects</a></li>
            <li><a class="menu__item" href="#contact">Contact</a></li>
            </ul>
        </div>


</header>


<main class='my-main'>
    <div class='hero-section-div row overlay'>
        <div class="hero-section-div-elements">
            <p class="hero-section-div-p">Crafting<br>Architectural<br>Wonders</p>
            <div class="hero-section-div-p-mobile-container">
                <p class="hero-section-div-p-mobile">Your Ideas & Dreams Are Transformed By Us Into Long-Lasting, Engineered Buildings</p>
            </div>
            <p class="hero-section-div-p-tablet">Your Ideas & Dreams Are Transformed By Us Into Long-<br>Lasting, Engineered Buildings</p>
            <p class="hero-section-div-p-notebooks">Your Ideas & Dreams Are Transformed By Us Into<br> Long-Lasting, Engineered Buildings</p>
            <div class="hero-section-div-button-container">
            <a href="#contact" class="hero-section-div-button">Contact Us</a>
            <a href="#contact" class="hero-section-div-button2">Free Consultation</a>
            <p class="hero-section-div-p-third"><span>*</span> All Our Projects Are Curated By Experts</p>
            </div>
        </div>
        <div class="row">
            <img class="hero-section-div-image" src="img\Group-1.png">
        </div>
    </div>
</main>

<div id="script-div" class="myscript-div"></div>

<section id='about' class="second-section">
    <div class="second-section-div">
        <div class="second-section-image-div">
            <img class='second-section-image' src="img\second-section-image.png">
        </div>
        <div class="second-section-text-div">
            <div class="second-section-text-div-divider">
            </div>
            <p class="second-section-text-div-first-p">
                Take A Glimpse Into Our<br> Construction Voyage 
            </p>
            <p class="second-section-text-div-second-p">
                A Trailblazer In The Construction Industry. Our Journey Is One Of Passion,<br> Dedication, And A Relentless Pursuit Of Excellence.
            </p>
            <div class="second-section-text-div-containers">
                <div class="second-section-text-div-containers-divs">
                    <p class="second-section-text-div-containers-num-p">600+</p>
                    <p class="second-section-text-div-containers-text-p">Worked With 600+<br> Big Companies</p>
                </div>
                <div class="second-section-text-div-containers-divs">
                    <p class="second-section-text-div-containers-num-p">800+</p>
                    <p class="second-section-text-div-containers-text-p">Projects Completed<br> Successfully</p>
                </div>
                <div class="second-section-text-div-containers-divs1">
                    <p class="second-section-text-div-containers-num-p">99%</p>
                    <p class="second-section-text-div-containers-text-p">We Stand With 99% <br>Success Rate</p>
                </div>
            </div>
        </div>
    </div>
</section>




<section id="projects" class="third-section">
    <div class="container">
        <!-- <div class="grid-inner-first-div">
            <div></div>
            <div class="third-section-text-div-divider">
            </div>
            <p class="grid-div-first-p">Recent Projects</p>
            <p class="grid-div-third-p">Recent Projects Showcasting Our Craftsmanship And Inovation In Construction</p>
        </div> -->
        <div class="item1">
            <div class="third-section-text-div-divider">
            </div>
            <p class="grid-div-first-p">Recent Projects</p>
            <p class="grid-div-third-p">Recent Projects Showcasting Our Craftsmanship And Inovation In Construction</p>
        </div>
        <div class="item">
            <img class="grid-div-img" src="img\first-project.jpg">
            <div class="grid-text-div">
                <p class="grid-div-p">Lincoln High School</p>
                <p id="data-first" class="grid-div-place-p">Portland, OR</p>
                <div class="grid-date-div">
                    <p id="data-first" class="grid-div-data-p">Buiding &nbsp;&nbsp;&nbsp;&nbsp; January 23</p>
                    <a onclick="location.href='first_project.html'" class="grid-div-button">></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div>
                <img class="grid-div-img" src="img\second-project.jpg">
                <p class="grid-div-p">Wild Ginger Restaurant</p>
                <p id="data-first" class="grid-div-place-p">Seattle, WA</p>
                <div class="grid-date-div">
                    <p id="data-first" class="grid-div-data-p">Interior &nbsp;&nbsp;&nbsp;&nbsp; April 3</p>
                    <a onclick="location.href='first_project.html'"class="grid-div-button">></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="grid-div-img" src="img\third-project.jpg">
            <div class="grid-text-div">
                <p class="grid-div-p">Public Works Facility</p>
                <p id="data-first" class="grid-div-place-p">Hillsboro, OR</p>
                <div class="grid-date-div">
                    <p id="data-first" class="grid-div-data-p">Buiding &nbsp;&nbsp;&nbsp;&nbsp; August 27</p>
                    <a onclick="location.href='first_project.html'" class="grid-div-button">></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="grid-div-img" src="img\fourth-project.jpg ">
            <div class="grid-text-div">
                <p class="grid-div-p">Founders Hall</p>
                <p id="data-first" class="grid-div-place-p">Seattle, WA</p>
                <div class="grid-date-div">
                    <p id="data-first" class="grid-div-data-p">Buiding &nbsp;&nbsp;&nbsp;&nbsp; June 8</p>
                    <a onclick="location.href='first_project.html'" class="grid-div-button">></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="grid-div-img" src="img\fifth-project.jpg">
            <div class="grid-text-div">
                <p class="grid-div-p">Reservoir Improvements</p>
                <p id="data-first" class="grid-div-place-p">Portland, OR</p>
                <div class="grid-date-div">
                    <p id="data-first" class="grid-div-data-p">Renewal &nbsp;&nbsp;&nbsp;&nbsp; October 17</p>
                    <a onclick="location.href='first_project.html'"  class="grid-div-button">></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="grid-div-img" src="img\sixth-project.jpg">
            <div class="grid-text-div">
                <p class="grid-div-p">Fab D1X Mod 2</p>
                <p id="data-first" class="grid-div-place-p">Hillsboro, OR </p>
                <div class="grid-date-div">
                    <p id="data-first" class="grid-div-data-p">Buiding &nbsp;&nbsp;&nbsp;&nbsp; July 12</p>
                    <a onclick="location.href='first_project.html'"  class="grid-div-button">></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="fourth-section overlay2">
    <div class="contact-container">
        <div class="contact-text">
            <p class="contact-text-first-p">Get Free Consultation</p>
            <p class="contact-text-second-p">Send us an email or start a conversation by filling out the form on the right. Let’s talk!</p>
        </div>
        <div class="contact-form">
            <form id='contact-form' action="" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message</label>
                <textarea id="message" name="message"></textarea>
                <div class='form-response' id="form-response"></div>
                <div class='button-container'>
                    <input class='form-response-button' type="submit" value="Submit">
                    <div id='waiting-icon'></div>
                </div>
            </form>
        </div>
    </div>
</section>

<div>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($email)) {
        echo "All fields are required.";
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    $mail = new PHPMailer(true);
    try {
        // Настройки сервера
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'lostwiks@gmail.com';  
        $mail->Password = 'efxwvsrvvutirjvl';   
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->addAddress('lostwiks@gmail.com');  

        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Submission';
        $mail->Body    = "<h2>Сообщение</h2>
                        <p><strong>Name:</strong> {$name}</p>
                        <p><strong>Email:</strong> {$email}</p>
                        <p><strong>Message:</strong><br>{$message}</p>";

        $mail->send();
        echo '<p class="mail-form">Message has been sent<p>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
</div>  
<div id="form-response"></div>
<script src='javascript/script.js'></script>


<footer>
    <div class="footer-container">
        <div class="footer-section company">
            <h3 class="my-logo-div-p2">Urban<span class="my-logo-div-span">Rise</span></h3>
            <p>We Are More Than Just Builders; We Are Creators Of Architectural Marvels. With A Passion For Excellence And An Unwavering Commitment To Quality</p>
        </div>
        <div class='footer-section footer-section-image'>
            <img src='img\IMG_8611_1__1_-removebg-preview(1).png'>
        </div>
        <div class="footer-section footer-section-links">
            <ul class="left-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#projects">Projects</a></li>
            </ul>
            <ul class="right-links">
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section my-social-icons">
            <p>FOLLOW US</p>
            <div class="social-icons">
                <a href="#"><img src="img\2023_Facebook_icon(1).png" alt="Facebook"></a>
                <a href="#"><img src="img\circle-linkedin-512.png" alt="LinkedIn"></a>
                <a href="#"><img src="img\mail-icon-logo-28FE0635D0-seeklogo.com(1).png" alt="Instagram"></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Copyright © 2023 ADVENTOUR.</p>
    </div> 
</footer>

