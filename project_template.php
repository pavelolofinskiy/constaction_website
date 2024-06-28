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
    <link rel="stylesheet" href="css\project.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $projectTitle; ?> - UrbanRise</title>
</head>
<body>

<header class="my-header">
    <style></style>
        <h1 class="my-logo-div-p">Urban<span class="my-logo-div-span">Rise</span></h1>
        <style>
        @media (max-width: 490px) {
            .my-logo-div-p {
            color:#f0a500;
            }
        }

        </style>


        <nav class="my-header-nav">
            <a class="nav-menu" href="index.php#home">Home</a>
            <a class="nav-menu" href="index.php#about">About</a>
            <a class="nav-menu" href="index.php#projects">Projects</a>
            <a class="nav-menu" href="index.php#contact">Contact</a>
        </nav>
        

        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
            <span></span>
            </label>

            <ul class="menu__box">
            <li><a class="menu__item" href="index.php#home">Home</a></li>
            <li><a class="menu__item" href="index.php#about">About</a></li>
            <li><a class="menu__item" href="index.php#projects">Projects</a></li>
            <li><a class="menu__item" href="index.php#contact">Contact</a></li>
            </ul>
        </div>
</header>

<body>
    <header class="header-section">
        <div class="header-overlay">
            <h1 class="header-title"><?php echo $projectTitle; ?></h1>
            <p class="header-location"><?php echo $projectPlace; ?></p>
        </div>
    </header>
    <main class="main-content">
        <div class='main-content-text'>
            <p class='first-main-content-p'><?php echo $projectDescription; ?></p>
            <p class='second-main-content-p'><?php echo $projectSecondDescription; ?></p>
        </div>
    </main>
</body>
</html>

<style>

.header-section {
    position: relative;
    display: flex;
    justify-content: center;
    align-content: center;
    height: 100%;
    background: url('<?php echo $projectImage; ?>') no-repeat center center/cover;
    color: white;
    text-align: center;
    margin-top: 2.3rem;
}

.header-overlay {
    background-color: rgba(0, 0, 0, 0.7);
    padding: 20px;
    border-radius: 10px;
    height: 80px;
    margin-right: <?php echo $projectSpace; ?>;
    margin-top: 28rem;
    margin-bottom: 3rem;
    position: bottom;
}


@media (760px < width <= 1200px) {
    .header-section {
        justify-content: space-between;
    }

    .header-overlay {
        margin-right: 0;
        margin-left: 5.4vw;
    }


}

@media (max-width: 760px) {
    .header-section {
        margin-top: 0rem;
        justify-content: space-between;
    }

    .header-overlay {
        margin-right: 0;
        margin-left: 5.4vw;
    }
}

@media (max-width: 490px) {
    .header-overlay {
        margin-right: 10vw;
        margin-left: 10vw;
        width: 100%;
        height: 115px;
    }
}


</style>

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
                <li><a href="index.php#home">Home</a></li>
                <li><a href="index.php#projects">Projects</a></li>
            </ul>
            <ul class="right-links">
                <li><a href="index.php#about">About Us</a></li>
                <li><a href="index.php#contact">Contact</a></li>
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
<script src='javascript/script.js'></script>
</head>
</body>
</html>

