<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\newsRepository.php';
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\models\news.php';


if(isset($_POST['save'])){
    if(empty($_POST['name']) || empty($_POST['imgsrc']) || empty($_POST['desc']) || empty($_POST['pdf'])){
        echo "<script>alert('Please fill all fields!')</script>";
    }
    else{
        session_start();
        $id = rand(1,999);
        $name = $_POST['name'];
        $imgSrc = $_POST['imgsrc'];
        $desc = $_POST['desc'];
        $pdf = $_POST['pdf'];

        $news = new News($id, $imgSrc, $name,$desc,$pdf);
        $newsRepository = new NewsRepository();
        $newsRepository->insertNews($news);

        header("Location: http://localhost:8080/Projekti/ProjektiPHP/database/view/dashboard.php"); 
    }
}


?>  