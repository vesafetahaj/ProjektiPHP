<?php

include_once '../repository/projectRepository.php';
$project_id = $_GET['project_id'];
$projectRepository = new ProjectRepository();

$projectRepository->deleteProjectById($project_id);

header("location:dashboard.php");
?>
