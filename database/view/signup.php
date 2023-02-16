
<!DOCTYPE html>
<html>
    <head>
        <title>Sign up - START SMART ACADEMY</title>
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/style-navbar.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
        <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
        <link href="https://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/signup.css">
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
                    <h1>Sign up to Start Smart Academy</h1>
                    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                        <label>Name</label>
                        <input type="text" placeholder="Name" class="inputfield" id="name" name="name" style="margin-left: 180px;"><br>
                        <label  style = "color: red; font-size: 12px; padding-left: 230px;" for="name" id="nameMessage"></label> <br>

                        <label>Surname</label>
                        <input type="text" placeholder="Surname" class="inputfield" id="surname" name="surname" style="margin-left: 160px;"><br>
                        <label  style = "color: red; font-size: 12px; padding-left: 230px;" for="surname" id="surnameMessage"></label> <br>

                        <label>Gender</label>
                        <input type="radio" name="gjinia" style="margin-left: 180px;"><label>Male</label>
                        <input type="radio" name="gjinia" style="margin-left: 60px;"><label>Female</label> <br>
                        <label  style = "color: red; font-size: 12px; padding-left: 230px;"  id="genderMessage"></label> <br>

                        <label>Email </label>
                        <input type="email" placeholder="Email" class="inputfield" id="email" name="email" style="margin-left: 188px;"><br>
                        <label  style = "color: red; font-size: 12px; padding-left: 230px;" for="email" id="emailMessage"></label> <br>

                        <label>Password</label>
                        <input type="password" placeholder="Password" class="inputfield" id="password" name="password" style="margin-left: 160px;"><br>
                        <label  style = "color: red; font-size: 12px; padding-left: 230px;" for="password" id="passwordMessage"></label> <br>

                        <label>Confirm Password</label>
                        <input type="password" placeholder="Confirm Password" class="inputfield" id="confirmpassword" style="margin-left: 100px;"><br>
                        <label  style = "color: red; font-size: 12px; padding-left: 230px;" for="confirmpassword" id="confirmpasswordMessage"></label> <br>
                        <a href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/html/projects.html" style="margin-left: 0px;"><button id="signup" name="signup">Sign up</button></a><br>
                        <a href="http://localhost:8080/Projekti/ProjektiPHP/login%20validation/login.php" style="margin-left: 0px">Go back to log in</a><br><br>
                    </form> 
                    <?php include_once '../controller/registerController.php'?>
                    <input type="checkbox" name="remember me">
                    <label style="font-family: 'Gotham Light', sans-serif; font-size: 13px; font-weight: 800;"> Remember me</label>  <br><br><br>
                    <p style="margin-top: 30px; font-family: 'Gotham', sans-serif; font-size: 12px;">*Email addresses are not stored in a form that allows us to contact students. <br>
                        Students will never receive emails from Start Smart Academy except for password recovery.</p>
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
        <script src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/javascript/signup.js"></script>
    </body>
</html>
