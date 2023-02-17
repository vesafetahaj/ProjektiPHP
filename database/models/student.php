<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\studentRepository.php';
class Student{
    private $id;
    private $name;
    private $surname;
    private $age;
    private $phone;
    private $email;
    private $cities = array(
        'Prishtine',
        'Peje',
        'Prizren',
        'Gjakove',
        'Mitrovice',
        'Ferizaj'
    );
    private $trajnimet = array(
        'Fizikisht',
        'Online'
    );

    private $oraret = array(
        '9:00 - Hëne, Mërkurë',
        '10:00 - Hëne, Mërkurë',
        '11:00 - Hëne, Mërkurë',
        '12:00 - Hëne, Mërkurë',
        '13:30 - Hëne, Mërkurë',
        '15:00 - Hëne, Mërkurë',
        '9:00 - Marte, Enjte',
        '10:00 - Marte, Enjte',
        '11:00 - Marte, Enjte',
        '12:00 - Marte, Enjte',
        '13:30 - Marte, Enjte',
        '15:00 - Marte, Enjte'
    );

   
    

    function __construct($id,$name,$surname,$age,$phone,$email,$cities,$trajnimet,$oraret){
         $this->id=$id;
         $this->name=$name;
         $this->surname=$surname;
         $this->age=$age;
         $this->phone=$phone;
         $this->email=$email;
         $this->cities=$cities;
         $this->trajnimet=$trajnimet;
         $this->oraret=$oraret;
         
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
        $options = '';
        foreach ($this->cities as $city) {
          $options .= '<option value="' . $city . '">' . $city . '</option>';
        }
        return $options;
    }
    public function getTrajnimiOptions() {
        $options = '';
        foreach ($this->trajnimet as $trajnimi) {
          $options .= '<option value="' . $trajnimi . '">' . $trajnimi . '</option>';
        }
        return $options;
    }
    public function getOrariOptions() {
        $options = '';
        foreach ($this->oraret as $orari) {
          $options .= '<option value="' . $orari . '">' . $orari . '</option>';
        }
        return $options;
    }
  
    
}


?>