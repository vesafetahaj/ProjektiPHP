<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php';
class ContactUser{
    private $id;
    private $name;
    private $email;
    private $phone;
    private $zipcode;
    

    function __construct($id,$name,$email,$zipcode,$phone){
         $this->id=$id;
         $this->name=$name;
         $this->email=$email;
         $this->zipcode=$zipcode;
         $this->phone=$phone;
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getPhone(){
        return $this->phone;
    }
    function getZipCode(){
        return $this->zipcode;
    }
  
}


?>