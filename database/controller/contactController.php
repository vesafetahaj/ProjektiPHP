<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\contactRepository.php';
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\models\contactuser.php';

if(isset($_POST['submitContact'])){
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || 
    empty($_POST['zipcode'])){
        echo "Please fill all fields!";
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $zipcode = $_POST['zipcode'];
        $phone = $_POST['phone'];
        $id = rand(1,999).$email;

        $userContact = new ContactUser($id,$name,$email,$zipcode,$phone);
        $contactRepository = new ContactRepository();
        $contactRepository->insertContactUser($userContact);
    }
}


?>  