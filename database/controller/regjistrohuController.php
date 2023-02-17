<?php
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\studentRepository.php';
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\models\student.php';

if(isset($_POST['regjistrohuBttn'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $trajnimi = $_POST['trajnimi'];
    $orari = $_POST['orari'];
    $id = rand(1,999);
    
    $student = new Student($id,$name,$surname,$age,$phone,$email,$city,$trajnimi,$orari);
    $studentRepository = new StudentRepository();
    $studentRepository->insertStudent($student);
    
}


?>