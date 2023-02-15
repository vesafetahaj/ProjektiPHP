<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\controller\contactController.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kontakti - START SMART ACADEMY</title>
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/style-navbar.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
        <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/contact.css">
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/footer.css">
        <script src="https://kit.fontawesome.com/c2df117003.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <a href="http://localhost:8080/Projekti/ProjektiPHP/home.php"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-high-resolution-logo-color-on-transparent-background.png" id="logo"></a>
            <div id="socials">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div id="nav">
                <a href="http://localhost:8080/Projekti/ProjektiPHP/home.php">Home</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/planprogrami.php">Planprogrami</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/news.php">News</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/aboutus.php">About Us</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/database/view/contact.php" class="activeNav">Contact</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/regjistrohu.php">Regjistrohu</a>
            </div>
            <button id="loginbttn" onclick="location.href='http://localhost:8080/Projekti/ProjektiPHP/login validation/login.php'">Your Projects</button>
        </header>
        <main>
            <div class="imgbanner">
                <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/image (2).png">
                <h2>Contact <span style="color: yellow;"> US</span></h2>
                <h4>We Look forward to working with you</h4>
            </div>
            <div class="contact">
                <div class="form">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/paid-section.jpg">
                    <form name="myForm" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                        <input type="text" placeholder="name" id="name" required>
                        <input type="number" placeholder="phone" id="phone" required><br>
                        <input type="email" placeholder="email" id="email" required>
                        <input type="number" placeholder="zip code" id="zipcode" required><br>
                        <button onclick="contactValidation()" name="submitContact" id="submitContact">SUBMIT</button>
                    </form>
                    
                </div>
            </div>
            <div class="info">
                <h1><b>Start Smart Academy</b></h1>
                <dl>
                    <dt><b>Adresa</b></dt>
                    <a href="https://www.google.com/maps/place/Pashko+Vasa,+Prishtin%C3%AB/@42.6579085,21.1529225,17z/data=!4m5!3m4!1s0x13549ee56f851e0b:0xe6824045d06ee9c5!8m2!3d42.6579084!4d21.1551109?shorturl=1" target="_blank"><dd>Rr. Pashko Vasa nr.28 Pejton, 10000,Kosovë</dd></a>
                    <dt><b>Telefoni</b></dt>
                    <dd>044 123 456</dd>
                    <dt><b>Email</b></dt>
                    <a href="https://www.google.com/gmail/about/" target="_blank"><dd>startsmartacademy@gmail.com</dd></a>
                </dl>
                <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/abstract_rack_of_servers-100538194-large_1.jpg">

            </div>
           
        </main> 
        <footer>
            <a href="http://localhost:8080/Projekti/ProjektiPHP/home.php"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-white.png"></a>
            <div class="first-content">
                <a href="https://www.google.com/maps/place/Universiteti+p%C3%ABr+Biznes+dhe+Teknologji/@42.6026634,21.108897,13z/data=!4m8!1m2!2m1!1subt!3m4!1s0x13549e8d5d607f25:0xa31dd05b21bd09de!8m2!3d42.647155!4d21.153124"><p>Lagjja Kalabria,10000 Prishtine, Kosovo</p></a>
            </div>
            <div class="second-content">
                <p>+383 38 541 400</p>
            </div>
            <div class="third-content">
                <a href="https://mail.google.com/"><p>startsmartacademy@gmail.com</p></a>
            </div>
            <p id="legal">© COPYRIGHT 2022. START SMART ACADEMY. ALL RIGHTS RESERVED.</p>
        </footer>

        <script src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/javascript/contact.js"></script>
    </body>
</html>