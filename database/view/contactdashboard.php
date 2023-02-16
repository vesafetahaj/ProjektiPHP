
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>Contact forms</title>

</head>
<body>
<div class="container">       
    <h2>The information about contact forms</h2>  <br>  
  <table class="table table-striped table-hover">
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