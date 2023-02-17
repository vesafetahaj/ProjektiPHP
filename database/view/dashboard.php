<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c2df117003.js" crossorigin="anonymous"></script>
    <link href="https://fonts.cdnfonts.com/css/ff-monteral-two" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/m7-sans" rel="stylesheet">
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>Dashboard - START SMART Academy</title>
    <style>
       *{
            margin: 0;
            padding: 0;
            box-sizing: content-box;
            overflow: hidden;
        }
        .nav{
            background-color: orangered;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 60px;
        }
       
        .side-bar{
            width:20%;
            height: 1000px;
            background-color: orangered;

        }
        
        .nav h1{
            font-family: 'FF Monteral Two', sans-serif;
            color: white;
            margin-top: 10px;
            padding-left: 35px;
            font-size:30px;
        }
      
        a {
            display: inline;
            color: white;
            padding: 0px 20px;
            text-decoration: none;
            font-family: 'M7 Sans', sans-serif;
            margin-left:25px;
            float:left;
            margin-top: 20px;
        }
        .side-bar i{
            color: white; 
            margin-top: 60px;
            padding-left: 30px;
        }
        .side-bar i:first-child{
            margin-left: 15px;
        }
        .side-bar i:hover{
            color:lightgreen;   
        }
        a:hover{
            color:lightgreen;
        }
        #main{
            width:80%;
            background-color: #FED8B1;
            height: 1000px;
            display:inline;
            float:right;
            margin-top: -1000px;
        }
        #main h1{
            margin-top: 120px;
            text-align: center;
            color:orangered;
            font-size: 40px;
            font-family: 'FF Monteral Two', sans-serif;
        }
        .gallery {
            margin: 20px;
            border: 1px solid #ccc;
            float: left;
            width: 280px;
            margin-top: 100px;
            background-color: white;
        }
       
        .desc {
            padding: 15px;
            text-align: center;
            color:white;
            font-family: 'FF Monteral Two', sans-serif;
        }
        #main i{
            font-size:60px;
            margin-top: 30px;
            margin-left: 100px;
            margin-bottom: 30px;
        }
    
        
    </style>
</head>
<body>

    <div class="nav">
        <h1>DASHBOARD</h1>
    </div>
    <div class="side-bar">
            
        <i class="fa-solid fa-users"></i><a href="usersdashboard.php">Information about new users</a>
        <i class="fa-solid fa-address-book"></i><a href="contactdashboard.php">Contact Forms</a>
        <i class="fa-solid fa-school" ></i><a href="studentsdashboard.php">New Registered Students</a>
        <i class="fa-solid fa-newspaper"></i><a href="newsdashboard.php">News</a>
        <a href="http://localhost:8080/Projekti/ProjektiPHP/login%20validation/logout.php" style="margin-top:60px;margin-left:-80px;">LogOut</a>
    
    </div>
    <div id="main">
       <h1>Welcome to Start Smart Academy's</h1>
       <h1 style="margin-top: 20px">DASHBOARD</h1>
       <div class="gallery" style="margin-left: 90px; border: 1px solid blue;">
            <i class="fa-solid fa-user-pen" width="600" height="400" style="color:blue;"></i>
            <h2 style="color:blue;font-family: 'FF Monteral Two', sans-serif;text-align: center;margin-bottom:10px">3</h2>
            <div class="desc" style="background-color: blue;">Admins</div>
        </div>

        <div class="gallery" style="border: 1px solid green;">
        <i class="fa-solid fa-graduation-cap" width="600" height="400"  style="color:green;"></i>
            <h2 style="color:green;font-family: 'FF Monteral Two', sans-serif;text-align: center;margin-bottom:10px">100</h2>
            <div class="desc" style="background-color: green;">Students</div>
        </div>

        <div class="gallery" style="border: 1px solid purple;">
            <i class="fa-solid fa-book" width="600" height="400" style="color:purple;"></i>
            <h2 style="color:purple;font-family: 'FF Monteral Two', sans-serif;text-align: center;margin-bottom:10px">5</h2>
            <div class="desc" style="background-color: purple;">Programs</div>
        </div>

        
    </div>

    
</body>
</html>

