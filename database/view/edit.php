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
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>Edit User</title>
    <style>
        input[type=text], select, input[type=password]{
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        *{
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2 style="margin-left:30%">Edit User</h2><br>
    
    <form action="" method="POST">
        <div style="margin-left: 30%;">

            <label for="id">ID:</label><br>
            <input type="text" name="id" value="<?=$user['id']?>" readonly><br>
            <label for="name">Name:</label><br>
            <input type="text" name="name" value="<?=$user['name']?>"><br>
            <label for="surname">Surname:</label><br>
            <input type="text" name="surname" value="<?=$user['surname']?>"><br>
            <label for="email">Email:</label><br>
            <input type="text" name="email" value="<?=$user['email']?>"> <br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" value="<?=$user['password']?>"><br>
        
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