<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\projectRepository.php';
class Project{
    private $id;
    private $imgsrc;
    private $name;
    private $admin_id;
    
    function __construct($id,$imgsrc,$name,$admin_id){
         $this->id=$id;
         $this->imgsrc = $imgsrc;
         $this->name=$name;
         $this->admin_id = $admin_id;

    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getImgSrc(){
        return $this->imgsrc;
    }
    function getAdmin(){
        return $this->admin_id;
    }
}
?>