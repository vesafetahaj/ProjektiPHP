<?php
require_once('D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php');
if(isset($_POST['regjistrohuBttn'])){
    $qyteti = $_POST['selectCity'];
    $sql = $conn-> prepare('INSERT INTO regjistro(qyteti) values(:qyteti)');
    $conn->beginTransaction();
    $sql -> execute(array(':qyteti'=>$qyteti));
    $conn->comit();
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Regjistrohu - START SMART ACADEMY</title>
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/style-navbar.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
        <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/regjistrohu.css">
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/footer.css">
        <script src="https://kit.fontawesome.com/c2df117003.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header id="header">
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
                <a href="http://localhost:8080/Projekti/ProjektiPHP/database/view/contact.php">Contact</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/regjistrohu.php" class="activeNav">Regjistrohu</a>
            </div>
            <button id="loginbttn" onclick="location.href='http://localhost:8080/Projekti/ProjektiPHP/login validation/login.php'">Your Projects</button>
        </header>
        <main>
            <div class="container">
                <h1>REGJISTROHUNI TANI NË KURSIN E PROGRAMIMIT DUKE PLOTËSUAR<br> TË DHËNAT MË POSHTË:</h1> <br>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <label>Emri</label> <br>
                    <input type="text" id="nameField"> <br>
                    <label  style = "color: white; font-size: 14px; padding-left: 330px;" id="nameMessage"></label> <br>

                    <label>Mbiemri</label> <br>
                    <input type="text" id="surnameField"> <br>
                    <label  style = "color: white; font-size: 14px; padding-left: 330px;" id="surnameMessage"></label> <br>

                    <label>Mosha</label> <br>
                    <input type="number" id="ageField"> <br>
                    <label  style = "color: white; font-size: 14px; padding-left: 330px;"  id="ageMessage"></label> <br>

                    <label>Numri i telefonit</label> <br>
                    <input type="text" id="numberField"> <br>
                    <label  style = "color: white; font-size: 14px; padding-left: 330px;"  id="numberMessage"></label> <br>

                    <label>Email</label> <br>
                    <input type="email" id="emailField"> <br>
                    <label  style = "color: white; font-size: 14px; padding-left: 330px;" id="emailMessage"></label> <br>

                    <label>Qyteti</label> <br>
                    <select id="selectCity" name="selectCity">
                        <option>--</option>
                        <option>Prishtine</option>
                        <option>Peje</option>
                        <option>Prizren</option>
                        <option>Gjakove</option>
                        <option>Mitrovice</option>
                        <option>Ferizaj</option>
                    </select> <br>
                    <label  style = "color: white; font-size: 14px; padding-left: 330px;" id="cityMessage"></label> <br>
                    <label>Lloji i Trajnimit</label> <br>
                    <select id="trajnimi">
                        <option>--</option>
                        <option>Fizikisht</option>
                        <option>Online</option>
                    </select><br>
                    <label  style = "color: white; font-size: 14px; padding-left: 330px;" id="trajnimiMessage"></label> <br>
                    <label>Koha qe preferoni</label> <br>
                    <select id="orari">
                        <option>--</option>
                        <option>9:00 - Hëne, Mërkurë</option>
                        <option>10:00 - Hëne, Mërkurë</option>
                        <option>11:00 - Hëne, Mërkurë</option>
                        <option>12:00 - Hëne, Mërkurë</option>
                        <option>13:30 - Hëne, Mërkurë</option>
                        <option>15:00 - Hëne, Mërkurë</option>
                        <option>9:00 - Marte, Enjte</option>
                        <option>10:00 - Marte, Enjte</option>
                        <option>11:00 - Marte, Enjte</option>
                        <option>12:00 - Marte, Enjte</option>
                        <option>13:30 - Marte, Enjte</option>
                        <option>15:00 - Marte, Enjte</option>
                    </select> <br>
                    <label  style = "color: white; font-size: 14px; padding-left: 330px;" id="orariMessage"></label> <br>
                    <button id="regjistrohu" name="regjistrohuBttn">Regjistrohu</button>
                </form>
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
        <script src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/javascript/regjistrohu.js"></script>

    </body>
   
</html>
