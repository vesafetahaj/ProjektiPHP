<?php 
include '../database/databaseConnection.php';

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
        $hashed_password = password_hash($password,PASSWORD_BCRYPT);


        $sql = "INSERT INTO user (id,name,surname,email,hashed_password) VALUES (?,?,?,?,?)";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name,$surname,$email,$hashed_password]);
        echo "<script> alert('You have signed up successfully!') </script>";
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserByEmailAndPassword($email,$hashed_password){
      
    }

    function getUserById($id){
      $conn = $this->connection;

      $sql = "SELECT * FROM user WHERE id='$id'";
      $statement=$conn->query($sql);
      $user = $statement->fetch();

      return $user;
    }


    function updateUser($id,$name,$surname,$email,$hashed_password){
        $conn = $this->connection;

        $sql = "UPDATE user SET name=?,surname=?,email=?,hashed_password=? where id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$surname,$email,$hashed_password,$id]);
        echo "<script> alert('User has been updated successfuly!') </script>";
    }

    function deleteUserById($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('User has been deleted successfuly!') </script>";
    }
    
    function getEmail($email){
        $conn = $this->connection;

        $sql = "SELECT email from user where email='$email'";
        $statement=$conn->query($sql);
        $user = $statement->fetch();
        return $user;
    }
}


?>