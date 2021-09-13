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
$id_rdv='';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST["number"])) {

    $id_rdv = $_POST["id_rdv"];
  }

  if (isset($_POST["Cancel"])) {

    $id_rdv = $_POST["id_rdv"];
    $id_pat = $_POST["id_pat"];

$sql = "DELETE FROM `rendez_vous` WHERE `ID_RDv` = '$id_rdv' AND `ID_pat` = '$id_pat'";

if (mysqli_query($conn1, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn1);
}

echo '<script> window.alert("Appointment deleted successffully") </script>';

header('Location: index_rdv.php');
exit();

}

}
 
?>
<a href="index_rdv.php"></a>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-reboot.min.css">
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
<?php $sql = "SELECT patent.ID_pat,patent.nom_pat,patent.pre_pat, rendez_vous.ID_RDv,rendez_vous.objt_rdv,rendez_vous.date_rdv
              FROM patent 
              INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE `ID_RDv` = '$id_rdv' HAVING `ID_pat` =  '$id' ";
      $result = mysqli_query($conn1, $sql);

        if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
             
          ?>
    <div style="margin-top: 100px;" class="conter">
      <form method="POSt">
        <div class="form-row">
          <div class="form-group col-md-6">
              <input type="hidden" name="id_rdv" value="<?php echo $id_rdv?>">
              <input type="hidden" name="id_pat" value="<?php echo $id?>">
            <label for="inputEmail4">Firs Name</label>
            <input type="text"   class="form-control" value="<?php echo $row["nom_pat"]; ?> " readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Last Name</label>
            <input type="text"  class="form-control" value="<?php echo $row["pre_pat"];?>" readonly>
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Service</label>
            <input type="tel"  class="form-control" value="<?php echo $row["objt_rdv"]; ?>" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Date appointment</label>
            <input type="text" name="date" class="form-control" value="<?php echo $row["date_rdv"]; ?>" readonly>
          </div>
        </div>
        
        
        <button type="submit" name="Cancel" class="btn btn-primary"><i style="margin-right: 30px;" class="fa fa-minus-circle"></i>Cancel Appointment</button>
      </form>
    </div>
<?php } } else { ?>
    

<div class="conter alert alert-danger">
<strong> Sorry,</strong> The date number is incorrect please reconfirm the number <br><br><br>
<a href="numbre_rdv.php"  class="btn btn-outline-danger">Back</a>
</div>
<?php }?>








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