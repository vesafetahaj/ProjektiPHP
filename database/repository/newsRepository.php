<?php 
include 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php';

class NewsRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }

    public function insertNews($news) {
        $conn = $this->connection;
    
        $news_id = $news->getId();
        $name = $news->getName();
        $imgsrc = $news->getImgSrc();
        $desc = $news->getDesc();
        $pdf = $news->getPdf();
    
        
        $sql = "INSERT INTO addNews (news_id,imgSrc,name, description, pdf) VALUES (?, ?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([ $news_id,$imgsrc, $name, $desc,$pdf]);
    }
    

    function getAllNews(){
        $conn = $this->connection;

        $sql = "SELECT * FROM addNews";
        $statement = $conn->query($sql);
        $news = $statement->fetchAll();

        return $news;
    }
    function deleteNewsById($news_id){
        $conn = $this->connection;

        $sql = "DELETE FROM addNews WHERE news_id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$news_id]);
    }
    
}


?>