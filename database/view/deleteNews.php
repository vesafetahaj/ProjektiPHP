<?php

include_once '../repository/newsRepository.php';
$news_id = $_GET['news_id'];
$newsRepository = new NewsRepository();

$newsRepository->deleteNewsById($news_id);

header("location:dashboard.php");
?>
