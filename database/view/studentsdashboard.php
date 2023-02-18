<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>New students</title>

</head>
<body>
<div class="container">       
    <h2 style="margin-top:30px">The information about new students</h2>  <br>  
    <a href="dashboard.php"><button class='btn btn-primary' style="display:inline; float:right;margin-top:-60px;margin-bottom:30px;">Go back</button></a>

  <table class="table table-striped table-hover">
    <thead>
      <tr class="table-primary">
        <th>ID</th>
        <th>Emri</th>
        <th>Mbiemri</th>
        <th>Mosha</th>
        <th>Numri i telefonit</th>
        <th>Email</th>
        <th>Qyteti</th>
        <th>Lloji i trajnimit</th>
        <th>Orari</th>
      </tr>
    </thead>
    <tbody>
    
    <?php
        include_once '../repository/studentRepository.php';
        $studentRepository = new StudentRepository();
        $students = $studentRepository->getAllStudents();
        foreach ($students as $student) {
            echo
                "
           <tr>
               <td>$student[id]</td>
               <td>$student[emri]</td>
               <td>$student[mbiemri]</td>
               <td>$student[mosha]</td>
               <td>$student[numriTel]</td>
               <td>$student[email]</td>
               <td>$student[city]</td>
               <td>$student[trajnimi]</td>
               <td>$student[orari]</td>

           </tr>
           ";
          
        }
        

        ?>
    </tbody>
    
    
    </table>
</div>

</body>

</html>