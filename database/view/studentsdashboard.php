<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>New students</title>
    <style>
     table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 70%;
        margin-left:13%;
      }

      table td, table th {
        border: 1px solid #ddd;
        padding: 8px;
        height:35px;
      }

      table tr:nth-child(even){
        background-color: #f2f2f2;
      }

      table tr:hover {
        background-color: #ddd;
      }

      table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #0275d8;
        color: white;
      }
      button{
        border: none;
        height: 40px;
        border-radius: 4px;
        color: white;
        cursor:pointer;
        width: 80px;
        background-color: #0275d8;
        margin-right:240px;

      }
      button:hover{
        background-color: blue;
      }
      #back{
          display:inline; 
          float:right;
          margin-top:-60px;
          margin-bottom:30px;
        }
      @media only screen and (max-width: 375px){  
        .container a #back{
          margin-top:-10px;
        }
        .container table{
          margin-left:5px;
          
        }
        
      }
      </style>
</head>
<body>
<div class="container">       
    <h2 style="margin-top:30px;font-family: 'Roboto Condensed', sans-serif;margin-left:13%">The information about new students</h2>  <br>  
    <a href="dashboard.php"><button id="back">Go back</button></a>

  <table>
    <thead>
      <tr>
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