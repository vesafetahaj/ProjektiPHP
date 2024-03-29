<?php 
include 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user){
        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $password = $user->getPassword();
       


        $sql = "INSERT INTO user (id,name,surname,email,password) VALUES (?,?,?,?,?)";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name,$surname,$email,$password]);
        echo "<script> alert('You have signed up successfully!') </script>";
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserByEmailAndPassword($email,$password){
        $conn = $this->connection;

        $sql = "SELECT * FROM user where email = '$email' and password='$password'";
        $statement = $conn->query($sql);
        $user = $statement->fetchAll();

        return $user;
    }

    function getUserById($id){
      $conn = $this->connection;

      $sql = "SELECT * FROM user WHERE id='$id'";
      $statement=$conn->query($sql);
      $user = $statement->fetch();

      return $user;
    }


    function updateUser($id,$name,$surname,$email,$password){
        $conn = $this->connection;

        $sql = "UPDATE user SET name=?,surname=?,email=?,password=? where id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$surname,$email,$password,$id]);
        echo "<script> alert('User has been updated successfuly!') </script>";
    }

    function deleteUserById($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('User has been deleted successfuly!') </script>";
    }
    
    
}


?>