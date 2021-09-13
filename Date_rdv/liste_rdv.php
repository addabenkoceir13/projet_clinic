<?php
session_start();

if ( isset($_SESSION['ID_pat'])  &&  isset($_SESSION['pre_pat']) && isset($_SESSION['nom_pat']) && isset($_SESSION["date_niss_pat"])
&& isset($_SESSION["email_pat"]) && isset($_SESSION["address_pat"]) && isset($_SESSION["tel_pat"]) && isset($_SESSION["objt_rdv"])
&& isset($_SESSION["date_rdv"])) { 
  
  $_SESSION['pre_pat'];
  $_SESSION['nom_pat'];
  $_SESSION['date_niss_pat'];
  $_SESSION['tel_pat'];
  $_SESSION['address_pat'];
  $_SESSION['email_pat'];
  $_SESSION['objt_rdv'];
  $_SESSION['date_rdv'];
}
else {
  header('Location: index_RDV.php');
  exit();
}
include_once "include/conn_db.php";
 $id_pat = $_SESSION['ID_pat'];
$sql = "SELECT * FROM `rendez_vous` WHERE `ID_pat` = '$id_pat'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $id_rdv = $row["ID_RDv"];
  }
} else {
  echo "0 results";
}
?>
<a href="../public/re"></a>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css.map">
    <!-- ICONS -->
    <link rel="Logo Alaman.png" sizes="76x76" href="../photo/Logo Alaman.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../photo/Logo Alaman.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <!-- ICONS -->
    <link rel="Logo Alaman.png" sizes="76x76" href="photo/Logo Alaman.png">
    <link rel="icon" type="image/png" sizes="96x96" href="photo/Logo Alaman.png">

    <title>Appointment Confirmation</title>
    <style>
      body{
        background-color: #f9f9f9;
      }
        .bg-purple{
            background-color: #0D6EFD;
        }
    </style>
  </head>
  <body>
    
    <main role="main" class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
            <a href="../../public/Home/index_Home.php"><img class="mr-3" src="photo/Logo Alaman.png" alt="Logo" width="48" height="48">
          <div class="lh-200">
            <h2 class="mb-0 text-white lh-200">EL-AMEN</h2></a>
            <!-- <small>2021</small> -->
          </div>
          
        </div>
      
        <div class="my-3 p-3 bg-white rounded shadow-sm">
          <h6 class="border-bottom border-gray pb-2 mb-0">Appointment Confirmation</h6>
          <div class="alert alert-success"><strong>Note:</strong> In the event of canceling the appointment, please ask a patient to enter this number in order to cancel the appointment. Thank you </div>

          <div class="media text-muted pt-3">      
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">Appointement Number</strong>
              <?php echo $id_rdv;  ?>
             
            </p>
          </div>
          <div class="media text-muted pt-3">      
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">First Name</strong>
              <?php echo $_SESSION["nom_pat"];  ?>
            </p>
          </div>
          <div class="media text-muted pt-3">      
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">Last Name</strong>
              <?php echo $_SESSION["pre_pat"];  ?>

            </p>
          </div>
          <div class="media text-muted pt-3">      
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">Birthday</strong>
              <?php echo $_SESSION["date_niss_pat"];  ?>

            </p>
          </div>
          <div class="media text-muted pt-3">      
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">Addres</strong>
              <?php echo $_SESSION["address_pat"];  ?>

            </p>
          </div>
          <div class="media text-muted pt-3">      
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">Email</strong>
              <?php echo $_SESSION["email_pat"];  ?>

            </p>
          </div>
          <div class="media text-muted pt-3">      
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">Phone</strong>
              <?php echo $_SESSION["tel_pat"];  ?>

            </p>
          </div>
          <div class="media text-muted pt-3">      
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">Make an appointment </strong>
              <?php echo $_SESSION["objt_rdv"];  ?>

            </p>
          </div>
          <div class="media text-muted pt-3">      
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark"> Appointment Date </strong>
              <?php echo $_SESSION["date_rdv"];  ?>

            </p>
          </div>
         <div class="text-center">
          <a href="../public/Home/index_Home.php" class="btn btn-outline-primary "> <i style="margin-right: 30px;" class="fa fa-home"></i>Home</a>
          <a href="numbre_rdv.php" class="btn btn-primary "> <i style="margin-right: 30px;" class="fa fa-minus-circle"></i>Cancel Appointment</a>
          </div>
        </div>
      
       
      </main>
      























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="../../bootstrap/js/bootstrap.js.map"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
     -->
  </body>
</html>