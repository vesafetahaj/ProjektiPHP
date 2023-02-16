<?php 
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\contactRepository.php';
include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\models\contactuser.php';


if(isset($_POST['contactBttn'])){
   
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || 
    empty($_POST['zipcode'])){
        echo "<script>alert('Please fill all fields!')</script>";
    }
    else{
        $id = rand(1,999);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $zipcode = $_POST['zipcode'];
        $phone = $_POST['phone'];
       

        $userContact = new ContactUser($id,$name,$email,$zipcode,$phone);
        $contactRepository = new ContactRepository();
        $contactRepository->insertContacts($userContact);

        echo "<script>alert('Thank you for contacting us!')</script>";
    }
}

// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
// function validateName(){
//     $name = test_input($_POST["name"]);
//     if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
//         echo "<script>alert('Name: Only letters and white space allowed')</script>";
//     }
// }
// function validateEmail(){
//     $email = test_input($_POST["email"]);
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "<script>alert('Invalid email format')</script>";
//     }
// }

?>  