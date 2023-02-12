<?php 
include_once '../repository/userRepository.php';
include_once '../models/user.php';

if(isset($_POST['signup'])){
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || 
    empty($_POST['password'])){
        echo "Please fill all fields!";
    }else{
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = rand(100,999).$email;

        $user = new User($id,$name,$surname,$email,$password);
        $userRepository = new UserRepository();
        $userRepository->insertUser($user);
    }
}


?>  