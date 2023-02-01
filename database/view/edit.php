<?php
include_once '../repository/userRepository.php';

$userId = $_GET['id'];

$userRepository = new UserRepository();

$user = $userRepository->getUserById($userId);




?>


<form action="" method="POST">
        <input type="text" name="id" value="<?=$user['id']?>" readonly> <br><br>
        <input type="text" name="name" value="<?=$user['name']?>"> <br><br>
        <input type="text" name="surname" value="<?=$user['surname']?>"> <br><br>
        <input type="text" name="email" value="<?=$user['email']?>"> <br><br>
        <input type="password" name="password" value="<?=$user['password']?>" disabled> <br><br>
    
        <input type="submit" name="save" value="save"> <br><br>
</form>


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