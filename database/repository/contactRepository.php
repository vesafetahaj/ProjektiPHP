<?php 
include 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php';

class ContactRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }

    function insertContactUser($userContact){
        $conn = $this->connection;

        $id = $userContact->getId();
        $name = $userContact->getName();
        $email = $userContact->getEmail();
        $zipcode = $userContact->getZipCode();
        $phone = $userContact->getPhone();


        $sql = "INSERT INTO contact (id,name,email,zipcode,phone) VALUES (?,?,?,?,?)";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name,$email,$zipcode,$phone]);
        echo "<script> alert('Your contact form was sent successfully!') </script>";
    }
    
    function getAllContactUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM contact";
        $statement = $conn->query($sql);
        $usersContact = $statement->fetchAll();

        return $usersContact;
    }

    function getUserContactById($id){
      $conn = $this->connection;

      $sql = "SELECT * FROM contact WHERE id='$id'";
      $statement=$conn->query($sql);
      $userContact = $statement->fetch();

      return $userContact;
    }

    
    
}


?>