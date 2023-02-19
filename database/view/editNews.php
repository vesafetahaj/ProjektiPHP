<?php
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\newsRepository.php';

$id = $_GET['news_id'];

$newsRepository = new NewsRepository();

$news = $newsRepository->getNewsById($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>Edit News</title>
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
    <h2 style="margin-left:30%">Edit News</h2><br>
    
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <div style="margin-left: 30%;">

            <label>ID:</label><br>
            <input type="text" name="id" value="<?=$news['news_id'] ?>" readonly><br>
            <label>Img Src:</label><br>
            <input type="text" name="imgSrc" value="<?=$news['imgSrc']?>"><br>
            <label>Heading:</label><br>
            <input type="text" name="name" value="<?=$news['name']?>"><br>
            <label>Description:</label><br>
            <input type="text" name="description" value="<?=$news['description']?>"> <br>
            <label>Pdf:</label><br>
            <input type="text" name="pdf" value="<?=$news['pdf']?>"><br>
        
            <button name="save">Save</button>
        
            
        </div>
    </form>
</body>
</html>



<?php
if(isset($_POST['save'])){
    $news_id = $id;
    $imgSrc = $_POST['imgSrc'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $pdf = $_POST['pdf'];
    $newsRepository->updateNews($news_id,$imgSrc,$name,$description,$pdf);
    header("location:dashboard.php");
}


?>