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
    <title>Edit News</title>
    <style>
        
     .container table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 80%;
        margin-left:90px;
        font-size:12px;
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
        background-color: #04AA6D;
        color: white;
      }
      button{
        border: none;
        height: 40px;
        border-radius: 4px;
        color: white;
        cursor:pointer;
        width: 80px;

      }
      #back{
        background-color: #038857;
      }
      #back:hover{
        background-color: #04AA6F;
      }
      #back{
        display:inline; 
        float:right;
        margin-top:-60px;
        margin-bottom:30px;
        margin-right:240px;
      }
      #edit{
        background-color: blue;
      }
      #edit:hover{
        background-color: #02075d;
      }
      #edit{
        background-color:blue ;
      }
      #edit:hover{
        background-color: green;
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
    <h2 style="margin-top:30px;font-family: 'Roboto Condensed', sans-serif;margin-left:13%">Edit news</h2>  <br>  
    <a href="dashboard.php"><button id="back">Go back</button></a>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Img Src</th>
        <th>Name</th>
        <th>Description</th>
        <th>Pdf</th>
        <th>Edit Action</th>
      </tr>
    </thead>
    <tbody>
    
    <?php
        include_once '../repository/newsRepository.php';
        $newsRepository = new NewsRepository();
        $news = $newsRepository->getAllNews();
        foreach ($news as $new) {
            echo
                "
           <tr>
               <td>$new[news_id]</td>
               <td>$new[imgSrc]</td>
               <td>$new[name]</td>
               <td>$new[description]</td>
               <td>$new[pdf]</td>
               
              
               <td><button onclick=location.href='editNews.php?news_id=$new[news_id]' id='edit'>Edit</button></td>

           </tr>
           ";
          
        }
        

        ?>
    </tbody>
    
    
    </table>
</div>

</body>

</html>