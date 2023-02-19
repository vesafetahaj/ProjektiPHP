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

        $sql = "DELETE FROM addnews WHERE news_id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$news_id]);
    }
    function getNewsById($id){
        $conn = $this->connection;
  
        $sql = "SELECT * FROM addnews WHERE news_id='$id'";
        $statement=$conn->query($sql);
        $news = $statement->fetch();
  
        return $news;
      }
      function updateNew($news_id, $imgSrc, $name, $description, $pdf) {
        $conn = $this->connection;
    
        $sql = "UPDATE addnews SET imgSrc=?, name=?, description=?, pdf=? WHERE news_id=?";
    
        $statement = $conn->prepare($sql);
    
        $statement->execute([$imgSrc, $name, $description, $pdf, $news_id]);
        echo "<script> alert('News has been updated successfuly!') </script>";
    }
    
    
}


?>