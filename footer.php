<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        footer{
    height: 200px;
    background-color: #ec6c4c;
}
footer img{
    margin-left: 30px;
    margin-top: 30px;
    display: inline;
}

footer .first-content{ 
    display: inline;
    margin-left: 60px;
    margin-top: 60px;
    position: absolute;
    top: 2000;
}
footer a{
    text-decoration: none;
    color: white;
    font-family: 'Poppins', sans-serif;
    margin-top: 20px;
    margin-left: 30px;
}
footer .second-content{ 
    display: inline;
    margin-left: 500px;
    margin-top: 90px;
    position: absolute;
    top: 2000;
    color: white;
    font-family: 'Poppins', sans-serif;
}
footer .third-content{ 
    display: inline;
    margin-left: 800px;
    margin-top: 70px;
    position: absolute;
    top: 2000;
    color: white;
    font-family: 'Poppins', sans-serif;
}
footer #legal{
    color: white;
    font-family: 'Poppins', sans-serif;
    margin-left: 480px;
    font-size: 12px;
}
@media only screen and (max-width: 375px){
    footer{
        width: 375px;
        height: 350px;
        background-color: #ec6c4c;
        margin-top: 100px;
    }
    footer img{
        margin-left: -15px;
        margin-top: 30px;
        width: 20%;
    }
    footer .first-content{ 
        margin-left: 20px;
        margin-top: 40px;
        font-size: 10px;
    }
    footer .second-content{ 
        margin-left: 20px;
        margin-top: 40px;
        font-size: 10px;
    }
    footer .third-content{ 
        margin-left: 20px;
        margin-top: 55px;
        font-size: 10px;
    }
    footer #legal{
        margin-top: 5px;
        margin-left: 70px;
        font-size: 7px;
    }
}
    </style>
</head>
<body>
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
</body>
</html>