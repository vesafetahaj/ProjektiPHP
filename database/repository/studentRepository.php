<?php
include 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php';

class StudentRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }
    function insertStudent($student){
        $conn = $this->connection;

        $id = $student->getId();
        $name = $student->getName();
        $surname = $student->getSurname();
        $email = $student->getEmail();
        $phone = $student->getPhone();
        $age = $student ->getAge();
        $cities = $student->getCityOptions();
        $trajnimet = $student->getTrajnimiOptions();
        $oraret = $student->getOrariOptions();


        
        $sql = "INSERT INTO regjistro (id,emri,mbiemri,mosha,numriTel,email,city,trajnimi, orari) VALUES (?,?,?,?,?,?,?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name,$surname,$age,$phone,$email,$cities,$trajnimet,$oraret]);
        echo "<script> alert('Regjistrimi juaj u be me sukses') </script>";
    }

    function getAllStudents(){
        $conn = $this->connection;

        $sql = "SELECT * FROM regjistro";
        $statement = $conn->query($sql);
        $students = $statement->fetchAll();

        return $students;
    }

}

?>