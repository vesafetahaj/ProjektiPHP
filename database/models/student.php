<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\studentRepository.php';
class Student{
    private $id;
    private $name;
    private $surname;
    private $age;
    private $phone;
    private $email;
    private $cities;
    private $trajnimet;

    private $oraret;

   
    

    function __construct($id,$name,$surname,$age,$phone,$email,$cities,$trajnimet,$oraret){
         $this->id=$id;
         $this->name=$name;
         $this->surname=$surname;
         $this->age=$age;
         $this->phone=$phone;
         $this->email=$email;
         $this->cities = $cities;
         $this->trajnimet = $trajnimet;
         $this->oraret = $oraret;
         
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getSurname(){
        return $this->surname;
    }
    function getEmail(){
        return $this->email;
    }
    function getPhone(){
        return $this->phone;
    }
    function getAge(){
        return $this->age;
    }
    public function getCityOptions() {
        return $this->cities;
    }
    public function getTrajnimiOptions() {
        return $this->trajnimet;
    }
    public function getOrariOptions() {
        return $this->oraret;
    }
  
    
}


?>