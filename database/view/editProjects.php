<?php
include_once '../repository/projectRepository.php';

$id = $_GET['project_id'];

$projectRepository = new ProjectRepository();

$projects = $projectRepository->getProjectsById($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>Edit Projects</title>
    <style>
        input[type=text], select, input[type=password]{
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        *{
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2 style="margin-left:30%">Edit Projects</h2><br>
    
    <form action="" method="POST">
        <div style="margin-left: 30%;">

            <label>ID:</label><br>
            <input type="text" name="id" value="<?=$projects['project_id'] ?>" readonly><br>
            <label>Img Src:</label><br>
            <input type="text" name="imgSrc" value="<?=$projects['imgSrc']?>"><br>
            <label>Name:</label><br>
            <input type="text" name="name" value="<?=$projects['name']?>"><br>
            <label>Added By:</label><br>
            <input type="text" name="added_by" value="<?=$projects['added_by']?>"><br>
            <button name="save">Save</button>
        
            
        </div>
    </form>
</body>
</html>



<?php
if(isset($_POST['save'])){
    $project_id = $id;
    $imgSrc = $_POST['imgSrc'];
    $name = $_POST['name'];
    $added_by = $_POST['added_by'];
    $projectRepository->updateProject($project_id,$imgSrc,$name,$added_by);
    header("location:dashboard.php");
}


?>