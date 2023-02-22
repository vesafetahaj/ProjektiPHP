<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\projectRepository.php';
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\models\project.php';
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\models\projectUser.php';



if(isset($_POST['save'])){
    if(empty($_POST['name']) || empty($_POST['imgsrc']|| empty($_POST['added_by']))){
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
        $_SESSION['user_id'] = $user_id;
        $user_id = $_SESSION['user_id'];
        $projectuser = new ProjectUser($id,$user_id);
        $projectuserRepository = new ProjectUserRepository();
        $projectuserRepository->insertProjectUser($projectuser);

        header("Location: http://localhost:8080/Projekti/ProjektiPHP/login%20validation/projects.php"); 
    }
}


// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
// function validateName(){
//     $name = test_input($_POST["name"]);
//     if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
//         echo "<script>alert('Name: Only letters and white space allowed')</script>";
//     }
// }
// function validateEmail(){
//     $email = test_input($_POST["email"]);
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "<script>alert('Invalid email format')</script>";
//     }
// }

?>  