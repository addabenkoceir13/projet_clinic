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
}else {
  header('Location: ../registation/login/public HTML/index_login.php');
  exit();
}
  if (isset($_POST["update"])) {
    
    $fname    = ucfirst($_POST["fname"]);
    $lname    = ucfirst($_POST["lname"]);
    $birthday = $_POST["birthday"];
    $gender   = $_POST["gender"];
    $address  = ucfirst($_POST["address"]);
    $phone    = $_POST["phone"];
    $email    = $_POST["email"];
    $password = $_POST["password"];

  $sql = "UPDATE `patent` SET `nom_pat`='$fname',`pre_pat`='$lname',`date_niss_pat`='$birthday',`sexe_pat`='$gender',`tel_pat`='$phone', `address_pat` ='$address', `email_pat`='$email',`pass_pat`='$password' 
  WHERE `ID_pat` = $id ";

if (mysqli_query($conn1, $sql)) {
  // echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn1);
}
  }


?>
<a href="../registation/login/public HTML/index_login.php"></a>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 <!-- icons -->
 <link rel="Logo Alaman.png" sizes="76x76" href="photo/Logo Alaman.png">
 <link rel="icon" type="image/png" sizes="96x96" href="photo/Logo Alaman.png">
    <title>My Profile</title>
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
    </style>
  </head>
  <body>
<?php $sql = "SELECT * FROM `patent` WHERE `ID_pat` = $id";
      $result = mysqli_query($conn1, $sql);

        if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
          ?>
    <div class="conter">
      <form method="POSt">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Firs Name</label>
            <input type="text" name="fname"  class="form-control" value="<?php echo $row["nom_pat"]; ?> " required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Last Name</label>
            <input type="text" name="lname" class="form-control" value="<?php echo $row["pre_pat"];?>" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Birthday</label>
            <input type="date" name="birthday" class="form-control" value="<?php echo $row["date_niss_pat"] ;?>" required>
          </div>
          <div class="col-md-6 mb-6">
            <label for="validationCustom04">Gender</label>
            <select name="gender" class="custom-select" value="" required>
              <option selected disabled value="">Choose...</option>
              <option value="MAn" >Man</option>
              <option value="Woman" >Woman</option>
            </select>
          </div>
        </div>  
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Phone</label>
            <input type="tel" name="phone" class="form-control" value="<?php echo $row["tel_pat"]; ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Address</label>
            <input type="text" name="address" class="form-control" value="<?php echo $row["address_pat"]; ?>" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Phone</label>
            <input type="email" name="email" class="form-control" value="<?php echo $row["email_pat"]; ?>" required>
          </div>
          <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $row["pass_pat"]; ?>" required>
          </div>
        </div>
        
        <button type="submit" name="update" class="btn btn-primary">Update Profile</button>
      </form>
      <a href="index_Home.php" class="btn btn-primary">Home</a>
    </div>
<?php } }?>
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