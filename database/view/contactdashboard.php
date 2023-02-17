
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
    <title>Contact forms</title>

</head>
<body>
<div class="container">       
    <h2 style="margin-top:30px">The information about contact forms</h2>  <br> 
    <a href="dashboard.php"><button class='btn btn-warning' style="display:inline; float:right;margin-top:-60px;margin-bottom:30px;">Go back</button></a>
 
  <table class="table table-striped table-hover">
    <thead>
      <tr class = "table-warning">
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