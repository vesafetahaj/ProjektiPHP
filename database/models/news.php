<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\newsRepository.php';
class News{
    private $id;
    private $imgsrc;
    private $name;
    private $desc;
    private $pdf;
    
    function __construct($id,$imgsrc,$name,$desc,$pdf){
         $this->id=$id;
         $this->imgsrc = $imgsrc;
         $this->name=$name;
         $this->desc=$desc;
        $this->pdf = $pdf;
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
    function getDesc(){
        return $this->desc;
    }
    function getPdf(){
        return $this->pdf;
    }
}
?>