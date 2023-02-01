<?php

include_once 'users.php';

if(isset($_POST['loginBttn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
        echo "Please fill all fields!";
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];

        $i = 0;
        foreach($users as $user){
            $i++;
            if($email == $user['email'] && $password == $user['password']){

                session_start();

                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                $_SESSION['role']=$user['role'];

                header("location:projects.php");
                exit();

            }else{
                if($i == sizeOf($users)){
                    header("location:notification.php");
                    exit();
                }

            }

        }

    }
}




?>