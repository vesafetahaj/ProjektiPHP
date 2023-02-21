<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\projectUserRepository.php';
class ProjectUser{
    private $project_id;
    private $user_id;

    
    function __construct($project_id,$user_id){
         $this->project_id=$project_id;
        $this->user_id=$user_id;

    }

    function getProject_id(){
        return $this->project_id;
    }
    function getUser_id(){
        return $this->user_id;
    }
    
}
?>