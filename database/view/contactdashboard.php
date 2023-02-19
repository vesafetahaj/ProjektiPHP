
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>Contact forms</title>
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
        background-color: #f0ad4e;
        color: white;
      }
      button{
        border: none;
        height: 40px;
        border-radius: 4px;
        color: white;
        cursor:pointer;
        width: 80px;
        background-color: #f0ad4e;
        margin-right:240px;

      }
      button:hover{
        background-color: orange;
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
    <h2 style="margin-top:30px;font-family: 'Roboto Condensed', sans-serif;margin-left:13%">The information about contact forms</h2>  <br> 
    <a href="dashboard.php"><button id="back">Go back</button></a>
 
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Emri</th>
        <th>Email</th>
        <th>ZipCode</th>
        <th>Phone</th>
        
      </tr>
    </thead>
    <tbody>
    
    <?php
        include_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\database\repository\contactRepository.php';
        $contactRepository = new ContactRepository();
        $contactusers = $contactRepository->getAllContacts();
        foreach ($contactusers as $contactuser) {
            echo
                "
           <tr>
               <td>$contactuser[id]</td>
               <td>$contactuser[name]</td>
               <td>$contactuser[email]</td>
               <td>$contactuser[zipcode]</td>
               <td>$contactuser[phone]</td>
               
           </tr>
           ";
          
        }
        

        ?>
    </tbody>
    
    
    </table>
</div>

</body>

</html>