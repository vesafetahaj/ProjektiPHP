<?php

include_once('D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php');

class DBProjects{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }
    function getProjectsByImgSrcAndName(){
        $conn = $this->connection;

        $sql = "SELECT imgSrc, name FROM projects";
        $statement = $conn->query($sql);
        $projects= $statement->fetchAll();

        return $projects;
    }
}

?>

