<?php
session_start();
$hide="";
if(!isset($_SESSION['username'])){
    header("location:projects.php");
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
    <title>Document</title>
    <style>
        .hide{
            display: none;
        }
    </style>
</head>
<body>
    <h1>Your Projects</h1>
    <a href="dashboard.php" class="<?=$hide?>">Dashboard</a>
</body>
</html>

<?php

    }
}
?>