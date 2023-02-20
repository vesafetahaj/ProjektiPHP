<!DOCTYPE html>
<html>
    <head>
        <title>About Us - START SMART ACADEMY</title>
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/style-navbar.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
        <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/aboutus.css">
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/footer.css">
        <script src="https://kit.fontawesome.com/c2df117003.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    </head>
    <body>
        <header>
            <a href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/html/home.html"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-high-resolution-logo-color-on-transparent-background.png" id="logo"></a>
            <div id="socials">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div id="nav">
                <a href="http://localhost:8080/Projekti/ProjektiPHP/home.php">Home</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/planprogrami.php">Planprogrami</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/news.php">News</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/aboutus.php" class="activeNav">About Us</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/database/view/contact.php">Contact</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/regjistrohu.php">Regjistrohu</a>
            </div>
            <button id="loginbttn" onclick="location.href='http://localhost:8080/Projekti/ProjektiPHP/login validation/login.php'">Your Projects</button>
        </header>
        <main>
            <div class="about">
                <h1>About</h1>
                <h3>START SMART Acadamey</h3>
                <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/about-header.png" alt="">
            </div>
            <div class="img-content">
                <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/web_banner_2021.webp">
            </div>
            <div class="text-content">
                <h1>Ku ndodhemi ne?</h1>
                <h4><?php

                    require_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php';
                    $db = new DBConnection();
                    $conn = $db->startConnection();

                    $stmt = $conn->prepare("SELECT vendndodhja FROM aboutus WHERE id = 1");
                    $stmt->execute();
                    $result = $stmt->fetch();


                    echo $result['vendndodhja'];

                ?></h4>
                    
            </div>
            <div class="mission">
                <h1>Our Mission</h1>
                <h3><?php

                    require_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php';
                    $db = new DBConnection();
                    $conn = $db->startConnection();

                    $stmt = $conn->prepare("SELECT misioni FROM aboutus WHERE id = 1");
                    $stmt->execute();
                    $result = $stmt->fetch();


                    echo $result['misioni'];

                ?></h3>
            </div>
            <div class="corevalues">
                <h1>Vlerat thelbësore</h1>
                <div class="left">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/64113848e1f7730a9b94ead18ab015a6.png">
                    <h2>Nxitja e ekselencës akademike</h2>
                    <p id="desc"> Duke mbështetur mësues të aftë dhe të përkushtuar që mbajnë standarde të larta akademike,
                         motivojnë studentët tanë dhe bashkëpunojnë me familjet tona</p>
                </div>
                <div class="left">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/cb572f3cf0d1f1bcb5a763e9ce4a852f.png">
                    <h2>Edukimi i të gjithë fëmijës</h2>
                    <p id="desc"> Duke krijuar nxënës të angazhuar, duke inkurajuar ndershmërinë dhe duke udhëhequr zhvillimin social dhe akademik.</p>
                </div>
                <div class="left">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/2c7c4d9ae13e25c1191e4e174613d448.png">
                    <h2>Sigurimi i një mjedisi të sigurt</h2>
                    <p id="desc"> Duke promovuar respektin e ndërsjellë në komunitetin tonë të larmishëm të studentëve, mësuesve dhe familjeve</p>
                </div>
                <div class="left">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/78715aec451926fa9130e28bf60102e9.png">
                    <h2>Zhvillimi i Mendimtarëve Kritikë</h2>
                    <p id="desc">Duke inkurajuar kuriozitetin intelektual dhe duke shpërblyer zgjidhës të pavarur dhe krijues të problemeve</p>
                </div>
                <div class="left">
                    <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/fc3190e5df4bf18e59b06413cf27e535.png">
                    <h2>Ndërtimi i Partneritetit</h2>
                    <p id="desc">Duke mirëpritur familjet tona, stafin dhe anëtarët e komunitetit të gjerë për të marrë pjesë dhe për të festuar sukseset e studentëve tanë</p>
                </div>
            </div>
        </main>
        
    </body>
    <?php require_once 'footer.php' ?>
</html>