<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\projectRepository.php';
class Project{
    private $id;
    private $imgsrc;
    private $name;
    private $added_by;
    function __construct($id,$imgsrc,$name,$added_by){
         $this->id=$id;
         $this->imgsrc = $imgsrc;
         $this->name=$name;
        $this->added_by = $added_by;
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
    function getAddedBy(){
        return $this->added_by;
    }
}
?>