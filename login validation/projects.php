<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/footer.css">
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>Your Projects - START SMART Academy</title>
    <style>
        #dashboardbttn{
            font-family: 'Gotham 4r', sans-serif;
            color: #fff;
            background-color: transparent;
            border: 2px solid #fff;
            border-radius: 5px;
            padding: 7px 14px;
            font-size: 14px;
            float: right;
            cursor: pointer;
            margin-top: 3px;
            margin-right: 10px;
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: content-box;
        }
        .project-banner{
            position: absolute;
            top: 0;
            left: 0;
            right: 0; 
            margin-top: 40px;
        }
        .project-banner img{
            max-width: 100%;
        }
        .text-banner{
            display: inline;
        }
        .text-banner h4{
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-top: -260px;
            margin-left: 150px;
            font-size: 40px;
        }
        .text-banner h6{
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-top:20px;
            margin-left: 150px;
            font-size: 15px;
        }
        .project-inspiration{
            width: 70%;
            margin: 0 auto;
            border: 1px solid gray;
            margin-top: 400px;
            height: 300px;
            background-color: lightgray;
        }
        .project-inspiration img{
            width: 56%;
        }
        .project-inspiration h3{
            float: right;
            margin-right: 90px;
            color: black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 30px;
            display: inline;
            margin-top: 20px;
        }
        .project-inspiration h6{
            float: right;
            margin-right: 70px;
            color: black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
            width: 30%;
            margin-top: -200px;
            line-height: 25px;
        }
        .project-inspiration a:hover{
            color: brown;
        }
        .nav{
            background-color: orangered;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 40px;
        }
        .nav button{
            font-family: 'Gotham 4r', sans-serif;
            color: #fff;
            background-color: transparent;
            border: 2px solid #fff;
            border-radius: 5px;
            padding: 7px 14px;
            font-size: 14px;
            float: right;
            cursor: pointer;
            margin-top: 3px;
            display: inline-block;
            margin-right: 50px;
        }
        .nav button:hover{
            border: 2px solid lightgreen;
            color: lightgreen;
        }
        #dashboardbttn:hover{
            border: 2px solid lightgreen;
            color: lightgreen;
        }
        .projects{
            display: flex;
            justify-content: space-around;
            font-size: 20px;
            font-family: monospace;
            margin-top: -70px;
           
        }
        .project-content{
            width: auto;
            border: 2px solid gray;
            margin-top: 90px;
        }
        .app:hover{
            box-shadow: 2px 2px 9px black;
        }
        #applab,#spritelab,#gamelab,#danceparty{
            font-size: 27px;
            font-family: monospace;
            margin-left: 34px;
            margin-top: 70px;
        }
    </style>
</head>
<body>
    <div class="nav">
        <a href='logout.php'><button>Log Out</button></a>
        <?php
        if (isset($_SESSION['role'])&&$_SESSION['role']=="admin") {
            echo '<a href="http://localhost:8080/Projekti/ProjektiPHP/database/view/dashboard.php"><button id="dashboardbttn">Dashboard</button></a>';
        }
        
        ?>
    </div>
    <div class="project-banner">
        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/project-banner.jpg" alt="">
        <div class="text-banner">
            <h4>Projects</h4>
            <h6>- START SMART Academy</h6>
        </div>
    </div>
    <div class="project-inspiration">
        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/app-lab.png" alt="">
        <h3>Project Inspiration</h3>
        <h6>You can find starter projects in <a href="https://code.org/educate/spritelab" target="_blank">Sprite Lab</a>,<a href="https://code.org/educate/gamelab" target="_blank"> Game Lab </a>, <a href="https://code.org/educate/applab" target="_blank">App Lab </a>, and <a href="https://code.org/educate/weblab" target="_blank"> Web Lab</a>. These include project descriptions, tips, and demo projects you can remix to make your own!</h6>
    </div>
    <h4 id="applab">App Lab Projects</h4>
    <div class="projects" style=" background-color: lightpink;">
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail.png" alt="" class="app"></a>
        </div>
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (1).png" alt=""class="app"></a>
        </div>
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (2).png" alt=""class="app"></a>
        </div>
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (3).png" alt=""class="app"></a>
        </div>
    
    </div>
    <h4 id="spritelab">Sprite Lab Projects</h4>
    <div class="projects" style=" background-color: yellow;">
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (4).png" alt="" class="app"></a>
        </div>
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (5).png" alt=""class="app"></a>
        </div>
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (6).png" alt=""class="app"></a>
        </div>
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (7).png" alt=""class="app"></a>
        </div>
    
    </div>
    <h4 id="gamelab">Game Lab Projects</h4>
    <div class="projects" style=" background-color: lightgreen;">
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (8).png" alt="" class="app"></a>
        </div>
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (9).png" alt=""class="app"></a>
        </div>
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (10).png" alt=""class="app"></a>
        </div>
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (11).png" alt=""class="app"></a>
        </div>
    
    </div>
    <h4 id="danceparty">Dance Party</h4>
    <div class="projects" style=" background-color: lightblue;">
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (12).png" alt="" class="app"></a>
        </div>
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (13).png" alt=""class="app"></a>
        </div>
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/placeholder.png" alt=""class="app"></a>
        </div>
        <div class="project-content">
            <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/thumbnail (14).png" alt=""class="app"></a>
        </div>
    
    </div> <br><br><br><br><br><br><br><br><br><br>    
</body>
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
</html>
