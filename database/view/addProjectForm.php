<?php

include_once('D:\xampp\htdocs\Projekti\ProjektiPHP\database\controller\projectController.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>Add New Projects - Start Smart ACADEMY</title>
</head>
<body>
<h2 style="margin-left:30%;margin-top:30px">Add Project</h2><br>
    
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" class="form-horizontal">
        <div class="col-xs-4" style="margin-left: 30%;margin-right:30%">
    <!--value="<?=$user['id']?>" -->
            <label for="id" class="control-label">Image-Src:</label>
            <input type="text" name="imgsrc" readonly class="form-control">
            <label for="name" class="control-label">Name:</label>
            <input type="text" name="name" class="form-control">
           
            <br><br><br>
            <button name="save" class="btn btn-primary btn-block">Submit</button>
        
            
        </div>
    </form>
</body>
</html>