<?php
include_once('D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php');

class LogInUsers{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }
    function getUsersByEmailAndPassword(){
        $conn = $this->connection;

        $sql = "SELECT email,password,is_admin FROM user";
        $statement = $conn->query($sql);
        $usersLogin = $statement->fetchAll();

        return $usersLogin;
    }
}

?>