<?php
require_once('D:\xampp\htdocs\Projekti\ProjektiPHP\Professional-IT-School-1\html\aboutus.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Document</title>
    <style>
        .staff-container{
            display:flex;
            justify-content: space-around;
            
        }
        .staff-block img{
            width:45%;
            margin-left:30px;
        }
        h3{
            margin-left:100px;
            font-family: 'Roboto Condensed', sans-serif;
            font-size:35px;
        }
        h2{
            font-family: 'Roboto Condensed', sans-serif;
            font-size:20px;
            margin-left: 75px;
            margin-top:-10px;
        }
        h6{
            font-family: 'Roboto Condensed', sans-serif;
            font-size:15px;
            margin-left: 75px;
            margin-top:-10px;
        }
    </style>
</head>
<body>
    <h3>Staff</h3>
    <hr>
    <div class="staff-container">
        <div class="staff-block" style="margin-left:50px">
            <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/beautiful-latin-woman-avatar-character-icon-free-vector.jpg">
            <h2>Greta Ahma</h2>
            <h6 style="margin-left:95px">CEO</h6>
        </div>
        <div class="staff-block">
            <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/istockphoto-1331335536-170667a.jpg" style="width:135%; margin-left:-100px">
            <h2 style="margin-left:-70px">Vesa Fetahaj</h2>
            <h6 style="margin-left:-30px">CEO</h6>
        </div>
        <div class="staff-block">
            <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/man-with-beard-avatar-character-isolated-icon-free-vector.jpg" style="margin-left:60px">
            <h2>Adrian Gashi</h2>
            <h6>Software Developer</h6>
        </div>
        <div class="staff-block">
            <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/beautiful-woman-avatar-character-icon-free-vector.jpg">
            <h2>Elsa Krasniqi</h2>
            <h6>Lecturer</h6>
        </div>
    </div>
    <div class="staff-container" style="margin-left:50px">
        <div class="staff-block">
            <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/beautiful-latin-woman-avatar-character-icon-free-vector.jpg">
            <h2>Vanesa Fetahaj</h2>
            <h6>Teaching assistant</h6>
        </div>
        <div class="staff-block">
            <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/istockphoto-1331335536-170667a.jpg" style="width:135%; margin-left:-100px">
            <h2 style="margin-left:-90px">Florentina Ademaj</h2>
            <h6 style="margin-left:-50px">Lecturer</h6>
        </div>
        <div class="staff-block">
            <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/man-with-beard-avatar-character-isolated-icon-free-vector.jpg" style="margin-left:60px">
            <h2>Enver Fetahaj</h2>
            <h6>Lecturer</h6>
        </div>
        <div class="staff-block">
            <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/beautiful-woman-avatar-character-icon-free-vector.jpg">
            <h2>Nesa Berisha</h2>
            <h6>Teaching assistant</h6>
        </div>
    </div>
    
</body>
<?php include_once('footer.php')?>
</html>