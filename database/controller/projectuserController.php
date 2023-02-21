<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\projectUserRepository.php';
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\models\projectuser.php';


if(isset($_POST['save'])){
    if(empty($_POST['name']) || empty($_POST['imgsrc'])){
        echo "<script>alert('Please fill all fields!')</script>";
    }
    else{
        session_start();
        $user_id = $_SESSION['id'];
        $project_id = $_SESSION['project_id'];
        $projectuser = new ProjectUser($user_id, $project_id);
        $projectuserRepository = new ProjectUserRepository();
            
        $projectuserRepository->insertProjectUser($projectuser);
    
        header("Location: http://localhost:8080/Projekti/ProjektiPHP/login%20validation/projects.php"); 
    }
}
   
   

?>