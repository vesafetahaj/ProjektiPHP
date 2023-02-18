<?php 
include 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php';

class ProjectRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }
    public function getAdminId() {
        $sql = "SELECT id FROM user WHERE is_admin = 1";
        $statement = $this->connection->query($sql);
        $admin = $statement->fetch();
        return $admin['id'];
    }

    public function insertProjects($project) {
        $conn = $this->connection;
    
        $id = $project->getId();
        $name = $project->getName();
        $imgsrc = $project->getImgSrc();
        $admin_id = $project->getAdminById();
    
        $sql = "INSERT INTO projects (id, imgSrc, name, admin_id) VALUES (?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$id, $imgsrc, $name, $admin_id]);
    }
    
    
   

    function getAdminByName(){
      $conn = $this->connection;

      $sql = "SELECT u.emri, u.mbiemri FROM user u JOIN projects p ON u.id=p.admin_id WHERE u.is_admin=1";
      $statement=$conn->query($sql);
      $adminName = $statement->fetch();

      return $adminName;
    }

    
    
}


?>