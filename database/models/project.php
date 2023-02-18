<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\projectRepository.php';
class Project{
    private $id;
    private $imgsrc;
    private $name;
    
    function __construct($id,$imgsrc,$name){
         $this->id=$id;
         $this->imgsrc = $imgsrc;
         $this->name=$name;

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
    
}
?>