<?php

include_once('D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php');

class DBNews{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }
    function getNews(){
        $conn = $this->connection;

        $sql = "SELECT * FROM addNews";
        $statement = $conn->query($sql);
        $news= $statement->fetchAll();

        return $news;
    }
}

?>

