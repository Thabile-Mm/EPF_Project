<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- use version 0.19.2 -->
<script lang="javascript" src="https://cdn.sheetjs.com/xlsx-0.19.2/package/dist/xlsx.full.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EPF_System</title>
</head>
<body>
<div class="container">
   <form action="#" method="post" enctype="multipart/form-data">
    <h5>Enter your details</h5>
   
     <input type="text" name="first_name" placeholder="Enter your first name" required>
     <input type="text" name="last_name" placeholder="Enter your last name" required>
     <input type="date" name="date_of_birth" required>
     <div class="file">
     <input type="file" name="myFile" id="myFile" accept=".xlsx" required>
     </div>
     
     <button name="submit" id="btn">SUBMIT</button>
   

   </form>
   </div>
 
    

 <script src="script.js"></script>
</body>
</html>

<?php

  include("config.php");

  if(isset($_POST['submit'])){

  $file = $_FILES["myFile"]["name"];
  $last_name = $_POST['last_name'];
  $first_name = $_POST['first_name'];
  $date_of_birth = $_POST['date_of_birth'];

  $file_temp = $_FILES["myFile"]["tmp_name"];

  move_uploaded_file($_FILES['myFile']['tmp_name'],$file);

  $add = $file;

  $file_store = 'Document/'.$add;

   move_uploaded_file($file_temp,$file_store);

   $insert = "INSERT INTO tbldata(first_name,last_name,date_of_birth,file_path)
    VALUES (' $first_name','$last_name','$date_of_birth','$file_store')";

   if(mysqli_query($conn,$insert)){
      ?>

      <script>
        window.alert("Data successfully saved and a table is created on the next page.");
        window.location.herf="data.php";
      </script>
      <?php
   }

  }
?>