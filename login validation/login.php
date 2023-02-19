<?php


session_start();
if(isset($_SESSION['email'])){
 header("location:projects.php");
}else{



  
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Log in to your projects - START SMART ACADEMY</title>
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/style-navbar.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
        <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
        <link href="https://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/projects.css">
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
        </header>
        <main>
            <div class="container">
                <div class="form">
                    <h1>Have an account already? Sign in</h1>
                    <form action="http://localhost:8080/Projekti/ProjektiPHP/login validation/loginvalidation.php" method="post">
                        <label for="email">Email</label>
                        <input type="text" id="email" placeholder="Email" name="email"><br>
                        <label  style = "color: red; font-size: 12px; padding-left: 130px;" for="email" id="emailMessage"></label> <br>
                        <label for="password" style="margin-left: 63px;">Password</label>
                        <input type="password" id="password" placeholder="Password" name="password" style="margin-left: 96px;"><br>
                        <label  style = "color: red; font-size: 12px; padding-left: 130px;" for="password" id="passwordMessage"></label> <br>
                        <a href="http://localhost:8080/Projekti/ProjektiPHP/login validation/projects.php"><button id="login" name="loginBttn">Log in</button></a>
                    </form>
                    <?php require_once('loginvalidation.php')?>
                    <a href="#" id="forgot">Forgot password?</a><br><br>   
                   
                    <a href="http://localhost:8080/Projekti/ProjektiPHP/database/view/signup.php"><button id="signup" style="background-color: #049cdb; border: 2px solid #02638d;">Create an account</button></a>
                </div>
                <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-black.png" style="float: right; width: 30%; margin-top: -320px;" id="blacklogo">
            </div>
            <div class="trycoding">
                <h1>Want to try coding without signing in?</h1>
                <div class="courseblock" style="margin-left: 200px;" id="courseblock">
                    <a href="#">
                        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/logo_tall_dance-2022.png" height="120px" width="100%">
                        <div class="course-container">
                            <h3 class="heading">Dance Party</h3>
                            <div class="text smalltext">
                                Code a Dance Party to share with friends and family. 
                                Featuring Beyoncé, Harry Styles, Lizzo, Lil Nas X, Selena Gomez, 
                                music from Disney's "Encanto," and more!
                            </div>
                        </div>
                    </a>
                </div>
                <div class="courseblock">
                    <a href="#">
                        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/logo_tall_aquatic.jpg" height="120px" width="100%">
                        <div class="course-container">
                            <h3 class="heading">Minecraft</h3>
                            <div class="text smalltext">
                                Use your creativity and problem solving skills to explore and build underwater worlds with code!
                            </div>
                        </div>
                    </a>
                </div>
                <div class="courseblock">
                    <a href="#">
                        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/logo_tall_oceans.jpg" height="120px" width="100%">
                        <div class="course-container">
                            <h3 class="heading">AI for Oceans</h3>
                            <div class="text smalltext">
                                Learn how AI and machine learning can be used to address world problems.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="courseblock">
                    <a href="#">
                        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/logo_tall_flappy.jpg" height="120px" width="100%">
                        <div class="course-container">
                            <h3 class="heading">Flappy Code</h3>
                            <div class="text smalltext">
                                Wanna write your own game in less than 10 minutes? Try our Flappy Code tutorial!
                            </div>
                        </div>
                    </a>
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
        <script src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/javascript/projects.js"></script>
        <script>
            

            var button = document.getElementById('darkmode');
            var body = document.querySelector("body");
            var header = document.querySelector("header");
            var logo = document.getElementById("blacklogo");
            
            
            button.onclick = function(){
                body.style.backgroundColor = "black";
                header.style.backgroundColor = "black";
                body.style.color = "white";
                logo.src = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-white.png";
            }
            button.ondblclick = function(){
                body.style.backgroundColor = "white";
                body.style.color = "black";
                header.style.backgroundColor = "white";
                logo.src = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-black.png"
            }
        </script>
        
    </body>

</html>
<?php
    }

?>