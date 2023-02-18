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
        $id = $_SESSION['id'];
    
        
        $sql = "INSERT INTO projects (imgSrc, name, id) VALUES (?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([ $imgsrc, $name, $id]);
    }
    


    function getAdminByName(){
      $conn = $this->connection;

      $sql = "SELECT u.emri, u.mbiemri FROM user u JOIN projects p ON u.id=p.admin_id WHERE u.is_admin=1";
      $statement=$conn->query($sql);
      $adminName = $statement->fetch();

      return $adminName;
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
    
}


?>