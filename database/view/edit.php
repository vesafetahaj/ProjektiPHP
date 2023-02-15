<?php
include_once '../repository/userRepository.php';

$userId = $_GET['id'];

$userRepository = new UserRepository();

$user = $userRepository->getUserById($userId);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>Edit User</title>
</head>
<body>
    <h2 style="margin-left:30%">Edit User</h2><br>
    
    <form action="" method="POST" class="form-horizontal">
        <div class="col-xs-4" style="margin-left: 30%;">

            <label for="id" class="control-label">ID:</label>
            <input type="text" name="id" value="<?=$user['id']?>" readonly class="form-control">
            <label for="name" class="control-label">Name:</label>
            <input type="text" name="name" value="<?=$user['name']?>" class="form-control">
            <label for="surname" class="control-label">Surname:</label>
            <input type="text" name="surname" value="<?=$user['surname']?>" class="form-control"> 
            <label for="email" class="control-label">Email:</label>
            <input type="text" name="email" value="<?=$user['email']?>" class="form-control"> 
            <label for="password" class="control-label">Password:</label>
            <input type="password" name="password" value="<?=$user['password']?>" class="form-control"><br>
        
            <button name="save" class="btn btn-primary btn-block">Save</button>
        
            
        </div>
    </form>
</body>
</html>



<?php
if(isset($_POST['save'])){
    $id = $userId;
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userRepository->updateUser($id,$name,$surname,$email,$password);
    header("location:dashboard.php");
}



?>