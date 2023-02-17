
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
    <title>Registered users</title>

</head>
<body>
<div class="container">       
    <h2>The information about new registered users</h2>  <br>  
  <table class="table table-striped table-hover">
    <thead>
      <tr class="table-success">
        <th>ID</th>
        <th>Emri</th>
        <th>Mbiemri</th>
        <th>Email</th>
        <th>Password</th>
        <th>Edit Action</th>
        <th>Delete Action</th>
      </tr>
    </thead>
    <tbody>
    
    <?php
        include_once '../repository/userRepository.php';
        $userRepository = new UserRepository();
        $users = $userRepository->getAllUsers();
        foreach ($users as $user) {
            echo
                "
           <tr>
               <td>$user[id]</td>
               <td>$user[name]</td>
               <td>$user[surname]</td>
               <td>$user[email]</td>
               <td>$user[password]</td>
               
               <td><button onclick=location.href='edit.php?id=$user[id]' class='btn btn-success'>Edit</button></td>
               <td><button onclick=location.href='delete.php?id=$user[id]' class='btn btn-danger'>Delete</button></td>

           </tr>
           ";
          
        }
        

        ?>
    </tbody>
    
    
    </table>
</div>

</body>

</html>