<?php 
include 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php';

class ProjectRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }

    public function insertProjects($project) {
        $conn = $this->connection;
        
      
        $project_id = $project->getId();
        $name = $project->getName();
        $imgsrc = $project->getImgSrc();
        
    
        
        $sql = "INSERT INTO projects (project_id,imgSrc, name) VALUES (?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$project_id, $imgsrc, $name]);
    }
    

    function getProjectsById($project_id){
        $conn = $this->connection;
  
        $sql = "SELECT * FROM projects WHERE project_id='$project_id'";
        $statement=$conn->query($sql);
        $projects = $statement->fetch();
  
        return $projects;
      }
    

    function getAllProjects(){
        $conn = $this->connection;

        $sql = "SELECT * FROM projects";
        $statement = $conn->query($sql);
        $projects = $statement->fetchAll();

        return $projects;
    }
    function deleteProjectById($project_id){
        $conn = $this->connection;

        $sql = "DELETE FROM projects WHERE project_id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$project_id]);
    }
    function updateProject($project_id, $imgSrc, $name) {
        $conn = $this->connection;
    
        $sql = "UPDATE projects SET imgSrc=?, name=? WHERE project_id=?";
    
        $statement = $conn->prepare($sql);
    
        $statement->execute([$imgSrc, $name, $project_id]);
        echo "<script> alert('News has been updated successfuly!') </script>";
    }
    
}


?>