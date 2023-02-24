<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\projectRepository.php';
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\models\project.php';

if(isset($_POST['save'])){
    if(empty(trim($_POST['name'])) || empty(trim($_POST['imgsrc'])) || empty(trim($_POST['added_by']))) {
        echo "<script>alert('Please fill all fields!')</script>";
    }
    else{
        session_start();
        $id = rand(1,999);
        $name = $_POST['name'];
        $imgSrc = $_POST['imgsrc'];
        $added_by = $_POST['added_by'];
        $project = new Project($id, $imgSrc, $name,$added_by);
        $projectRepository = new ProjectRepository();
        $projectRepository->insertProjects($project);
       
      
        header("Location: http://localhost:8080/Projekti/ProjektiPHP/login%20validation/projects.php"); 
    }
}

?>  