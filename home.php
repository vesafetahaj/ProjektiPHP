<!DOCTYPE html>
<html>
    <head>
        <title>START SMART Academy</title>
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/style-navbar.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
        <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/home.css">
        <link href="https://fonts.cdnfonts.com/css/montblanc" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/footer.css">
        <script src="https://kit.fontawesome.com/c2df117003.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <header id="header">
            <a href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/html/home.html"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-high-resolution-logo-color-on-transparent-background.png" id="logo"></a>
            <div id="socials">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
               <button id="darkmode"><i class="fa-solid fa-moon"></i></button>
            </div>
            <div id="nav">
                <a href="http://localhost:8080/Projekti/ProjektiPHP/home.php">Home</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/planprogrami.php">Planprogrami</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/news.php">News</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/aboutus.php">About Us</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/database/view/contact.php">Contact</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/regjistrohu.php">Regjistrohu</a>
            </div>
            <button id="loginbttn" onclick="location.href='http://localhost:8080/Projekti/ProjektiPHP/login validation/login.php'">Your Projects</button>
        </header>
        <main>
            <div class="slideshow-container">
            
                <div class="mySlides fade">
                  <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/pic1.jpg" style="width:134%">
                </div>
                
                <div class="mySlides fade">
                  <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/Child_programming_on_Pictoblox_395d374534 (2).jpg" style="width:134%;">
                </div>
                
                <div class="mySlides fade">
                  <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/idsfhh123_1.jpg" style="width:134%">
                </div>

                <div class="mySlides fade">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/EAL-NB.jpg" style="width:134%">
                  </div>
 
            </div>
            
            <div class="kurrikula-body">
                <h3>Kurrikula</h3>
                <div class="Kurrikula-right">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/circle (1).png">
                    <div class="content1">
                        <h1 class="kurrikula-content-right">Logjika e 
                            <br>
                            <span class="second-title">Programimit</span>
                        </h1>
                        
                    </div>
                </div>
              
                <div class="Kurrikula-left">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/dry-clean.png">
                    <div class="content1">
                        <h1 class="kurrikula-content-left">Webfaqe &
                            <br>
                            <span class="second-title">Aplikacione</span>
                        </h1>
                    </div>
                </div>
               
                <div class="Kurrikula-right">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/circle.png">
                    <div class="content1">
                        <h1 class="kurrikula-content-right">Programim i  
                            <br>
                            <span class="second-title">Avancuar</span>
                        </h1>
                    </div>
                  
                </div>
                <div class="Kurrikula-left">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/oval.png">
                    <div class="content1">
                        <h1 class="kurrikula-content-left">Programim
                            <br>
                            <span class="second-title">Profesional</span>
                        </h1>
                    </div>
                </div>
                
            </div>
            <div class="about-body">
                <div class="about-img">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/llaptopi-8-255x255.png" id="llaptop">
                </div>
                <div class="about-content" id="about-content">
                    <h2>Rreth planprogramit</h2> <br>
                    <em>
                    <?php

                        require_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php';
                        $db = new DBConnection();
                        $conn = $db->startConnection();
                         
                        $stmt = $conn->prepare("SELECT text FROM home WHERE id = 10");
                        $stmt->execute();
                        $result = $stmt->fetch();

                    
                        echo $result['text'];

                        ?>
                    </em><br>
                    <button id="readbttn" onclick="location.href='http://localhost:8080/Projekti/ProjektiPHP/planprogrami.php'">Read More ➔</button>
                </div>
            </div>
    
            <div class="gallery">
                <div class="gallery-photo">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/Teacher-helping-3-high-school-students-with-project-Feature-Image.jpg" width="600" height="400">
                </div>
                
                <div class="gallery-photo">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/Coding_Image_Top.jpg" width="600" height="400">
                </div>

                <div class="gallery-photo">
                        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/cute-pupils-in-computer-class-with-teacher-1024x512.jpg" width="600" height="400">
                </div>
                
                <div class="gallery-photo">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/Minecraft-Tutorial-img3-1240x736.jpg" width="600" height="400">
                </div>
                
                <div class="gallery-photo">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/EAL-NB.jpg" width="600" height="400">
                </div>

                <div class="gallery-photo">
                        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/minecraftNB-600x337.jpg" width="600" height="400">
                </div>
                
                <div class="gallery-photo">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/tok-pic-NB-600x337.jpg" width="600" height="400">
                </div>

                <div class="gallery-photo">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/personal-NB-600x337.jpg" width="600" height="400">
                </div>
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
        <script src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/javascript/home.js"></script>
    </body>
</html>