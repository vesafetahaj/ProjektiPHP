
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
    <title>Dashboard - START SMART Academy</title>
    <style>
       *{
            margin: 0;
            padding: 0;
            box-sizing: content-box;
        }
        .nav{
            background-color: orangered;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 40px;
        }
        .nav button{
            font-family: 'Gotham 4r', sans-serif;
            color: #fff;
            background-color: transparent;
            border: 2px solid #fff;
            border-radius: 5px;
            padding: 7px 14px;
            font-size: 14px;
            float: right;
            cursor: pointer;
            margin-top: 3px;
            display: inline-block;
            margin-right: 50px;
        }
        .nav button:hover{
            border: 2px solid lightgreen;
            color: lightgreen;
        }
        table, tr, th,td{
            border: 2px solid black;
            margin: 0 auto;
            margin-top: 30px;
            border-collapse: collapse;
            padding: 14px 7px;
        }
        #signupheading{
            font-size: 30px;
            margin-top: 60px;
            text-align: center;
            font-family: monospace;
        }
        #signup th{
            background-color: royalblue;
        }
        #signup tr:nth-child(even){
            background-color: lightblue;
        }
        #signup tr:nth-child(odd){
            background-color: lightgreen;
        }
        button{
            padding: 5px 6px;
            font-family: 'Gotham 4r', sans-serif;
            background-color: salmon;
            border: 1px solid red;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1 id="signupheading">Information about users</h1>
    <div class="nav">
        <button onclick="location.href='http://localhost:8080/Projekti/ProjektiPHP/login validation/logout.php'">Log Out</button>
    </div>
    <table id="signup">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once '../repository/userRepository.php';
        $userRepository  = new UserRepository();
        $users = $userRepository->getAllUsers();
        foreach($users as $user){
           echo 
           "
           <tr>
               <td>$user[id]</td>
               <td>$user[name]</td>
               <td>$user[surname]</td>
               <td>$user[email]</td>
               <td>$user[password]</td>
               <td><button onclick=location.href='edit.php?id=$user[id]'>Edit</button></td>
               <td><button onclick=location.href='delete.php?id=$user[id]'>Delete</button></td>

           </tr>
           ";
        }
        
        
        ?>
    </table>
    
</body>
</html>

