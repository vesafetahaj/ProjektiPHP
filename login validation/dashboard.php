<?php
if(!isset($_SESSION['email'])){
    header("location:http://localhost:8080/Projekti/ProjektiPHP/login validation/login.php");
}else{
    if($_SESSION['role'] == 'user'){
        header("location:http://localhost:8080/Projekti/ProjektiPHP/login validation/projects.php");
    }else{
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>
</body>
</html>

<?php
}
}
?>