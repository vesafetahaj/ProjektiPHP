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
                setcookie('login', $email,time()+3600);
                

                session_start();

                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                $_SESSION['role']=$user['role'];

                header("location:http://localhost:8080/Projekti/ProjektiPHP/login validation/projects.php");
                exit();

            }else{
                if($i == sizeOf($users)){
                    echo "Email or password is incorrect!";
                    exit();
                }

            }

        }

    }
}




?>