<?php
session_start();
$hide="";
if(!isset($_SESSION['email'])){
    header("location:http://localhost:8080/Projekti/ProjektiPHP/login validation/projects.php");
}else{
    if($_SESSION['role'] == "admin"){
        $hide="";
    }else{
        $hide="hide";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>Your Projects - START SMART Academy</title>
    <style>
        .hide{
            display: none;
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
            margin-top:-40px;
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
            margin-left: 1200px;
            cursor: pointer;
            margin-top: 3px;
        }
        .nav button:hover{
            border: 2px solid lightgreen;
            color: lightgreen;
        }
    </style>
</head>
<body>
    <div class="nav">
        <a href="http://localhost:8080/Projekti/ProjektiPHP/login validation/login.php"><button>Log Out</button></a>
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
    <a href="location:http://localhost:8080/Projekti/ProjektiPHP/login validation/dashboard.php" class="<?=$hide?>">Dashboard</a>
</body>
</html>

<?php

    }
}
?>