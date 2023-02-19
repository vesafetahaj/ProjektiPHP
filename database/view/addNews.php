<?php

include_once('D:\xampp\htdocs\Projekti\ProjektiPHP\database\controller\newsController.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>Add New Projects - Start Smart ACADEMY</title>
    <style>
        input[type=text], select{
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-left: 30px;
        }
        label{
            margin-left: 30px;
        }
        button {
            width: 80%;
            background-color: #0275d8;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 30px;
        }

        button:hover {
            background-color: #5bc0de;
        }
        *{
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: bold;
        }
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin-left: 30%;
            margin-right:30%
        }
        @media only screen and (max-width: 375px){
            div{
                width: 80%;
                margin-left:5%;
            }
        }
    </style>
</head>
<body>
<h2 style="margin-left:30%;margin-top:30px">Add News</h2><br>
    
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <div>
            <label>Image-Src:</label><br>
            <input type="text" name="imgsrc"><br>
            <label>Heading:</label><br>
            <input type="text" name="name">
            <label>Description:</label><br>
            <input type="text" name="desc"> <br>
            <label>Pdf:</label><br>
            <input type="text" name="pdf">
            <br><br><br>
            <button name="save">Submit</button>
        
            
        </div>
    </form>
</body>
</html>