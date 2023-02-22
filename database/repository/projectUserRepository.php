<?php 
include 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php';


class ProjectUserRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }

    public function insertProjectUser($project_id, $user_id) {
        $conn = $this->connection;
    
        
        $project_id = $project_id->getProject_id();
        $user_id = $user_id->getUser_id();
        $sql = "INSERT INTO projectuser (project_id,user_id) VALUES (?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$project_id, $user_id]);
        echo '<script>alert("Succes")</script>';
    }
    
    

    function getProjectsById($project_id){
        $conn = $this->connection;
  
        $sql = "SELECT * FROM projectuser WHERE project_id='$project_id'";
        $statement=$conn->query($sql);
        $projects = $statement->fetch();
  
        return $projects;
      }

      function getUsersById($user_id){
        $conn = $this->connection;
  
        $sql = "SELECT * FROM projectuser WHERE user_id='$user_id'";
        $statement=$conn->query($sql);
        $users = $statement->fetch();
  
        return $users;
      }
    

    function getAllProjectsUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM projectuser";
        $statement = $conn->query($sql);
        $projectuser = $statement->fetchAll();

        return $projectuser;
    }
    function getUserEmail($project_id){
        $conn = $this->connection;
    
        $sql = "SELECT u.email FROM user u join projectuser pu on u.id=pu.user_id WHERE pu.project_id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$project_id]);
        $userEmail = $statement->fetchColumn();
    
        return $userEmail;
    }
    
    // function deleteProjectById($project_id){
    //     $conn = $this->connection;

    //     $sql = "DELETE FROM projects WHERE project_id=?";

    //     $statement = $conn->prepare($sql);
    //     $statement->execute([$project_id]);
    // }
    // function updateProject($project_id, $imgSrc, $name, $added_by) {
    //     $conn = $this->connection;
    
    //     $sql = "UPDATE projects SET imgSrc=?, name=?, added_by=? WHERE project_id=?";
    
    //     $statement = $conn->prepare($sql);
    
    //     $statement->execute([$imgSrc, $name, $added_by,$project_id]);
    //     echo "<script> alert('Project has been updated successfully!') </script>";
    // }
    
}


?>