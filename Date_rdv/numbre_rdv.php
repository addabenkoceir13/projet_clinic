<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic";

// Create connection
$conn1 = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn1) {
  die("Connection failed: " . mysqli_connect_error());
} 
session_start();
if ( isset($_SESSION["email_pat"]) && isset($_SESSION['pre_pat']) && isset($_SESSION['nom_pat']) && isset($_SESSION['ID_pat'])){  
  $id = $_SESSION['ID_pat'];
}
else {
  header('Location: ../public/registation/login/public HTML/index_login.php');
  exit();
}
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-reboot.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- icons -->
 <link rel="Logo Alaman.png" sizes="76x76" href="photo/Logo Alaman.png">
 <link rel="icon" type="image/png" sizes="96x96" href="photo/Logo Alaman.png">
    <title>Cancel Appointment</title>
    <style>
      body{
        background: url(photo/IMG_01.jpg) no-repeat center/cover;
        width: 100%;
        height: 100%;
        min-height: 100vh;
        text-align: center;
        align-items: center;
        justify-content: center;
        display: flex;
}
      .conter{
        padding: 30px 0 ;
        width: 750px;
        background: rgba(255, 253, 253, 0.9);
        border-radius: 10px;
      }
      form{
       padding: 30px 40px;
      }
      form label{
        float: left;
        text-align: left;
      }
      .heading1{
        font-family: 'Open Sans', sans-serif;
        font-size: 30px;
        font-weight: 500;
        color: #2b90d9 ;
      }
    </style>
  </head>
  <body>

    <div class="conter">
        <h1 class="text-center heading1">Entre the appointment number, Please</h1>
      <form action="cansule_rdv.php"  method="POSt">
          <div class="form-group col-md-">
            <label for="inputEmail4"></label>
            <input type="number"  class="form-control " name="id_rdv" placeholder="Entre the appointment number" required>
          </div>
        <button type="submit" name="number" class="btn btn-primary ">appointment Number</button>
      </form>
    </div>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>