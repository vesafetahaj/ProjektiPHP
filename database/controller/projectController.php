<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\projectRepository.php';
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\models\project.php';


if(isset($_POST['save'])){
    if(empty($_POST['name']) || empty($_POST['imgsrc'])){
        echo "<script>alert('Please fill all fields!')</script>";
    }
    else{
        session_start();
        $id = rand(1,999);
        $name = $_POST['name'];
        $imgSrc = $_POST['imgsrc'];
        $admin_id = $_SESSION['id'];
        $projectRepository = new ProjectRepository();
        $admin_id = $projectRepository->getAdminId();
        $project = new Project($id, $imgSrc, $name, $admin_id);
        $projectRepository->insertProjects($project);
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