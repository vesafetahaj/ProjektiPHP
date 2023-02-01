<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>Register users</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="name" placeholder="name..."> <br><br>
        <input type="text" name="surname" placeholder="surname..."> <br><br>
        <input type="text" name="email" placeholder="email..."> <br><br>
        <input type="text" name="username" placeholder="username..."> <br><br>
        <input type="text" name="password" placeholder="password..."> <br><br>
        <input type="text" name="role" placeholder="role..."> <br><br>

        <input type="submit" name="registerBtn" value="register"> <br><br>
    </form>

   <?php include_once '../controller/registerController.php'?>
</body>
</html>