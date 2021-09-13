<?php
include_once "conn_db4.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
if(isset($_POST["edit_profil"])){
  $id_pat       = test_input($_POST["ID_pat"]);
  $fname        = test_input($_POST["fname"]);
  $lname        = test_input($_POST["lname"]);
  $birthday     = test_input($_POST["birthday"]);
  $gender       = test_input($_POST["gender"]);
  $phone        = test_input($_POST["phone"]);
  $address      = test_input($_POST["address"]);
  $email        = test_input($_POST["email"]);
  $password     = test_input($_POST["password"]);
  

      $sql2= "UPDATE `patent` SET `nom_pat`=' $fname',`pre_pat`='$lname',`date_niss_pat`= '$birthday',`sexe_pat`='$gender',`tel_pat`='$phone', `address_pat` = '$address',`email_pat`= '$email ',`pass_pat`='$password' WHERE`ID_pat`= $id_pat  ";
      if (mysqli_query($conn, $sql2)) {
        echo "<div class='alert alert-success'> The profil has benn modified for someone </div>";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
}
if(isset($_POST["delet_profil"])){
  $id_pat  = $_POST["ID_pat"];
  $sql = "DELETE FROM patent WHERE `ID_pat` = '$id_pat'";

  if (mysqli_query($conn, $sql)) {
    echo "<div class='alert alert-success'> This patient account has been deleted </div>";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }



  $sql2 = "DELETE FROM `rendez_vous` WHERE `ID_pat` = '$id_pat' ";

  if (mysqli_query($conn, $sql2)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  
}
} 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  

mysqli_close($conn);
?>
