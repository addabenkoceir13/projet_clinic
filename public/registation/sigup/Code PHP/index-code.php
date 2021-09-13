<?php
include "counct_db.php";


// define variables and set to empty values
$lnameErr = $fnameErr = $datenaissanceErr = $genderErr = $phoneErr = $emailErr = $passwordErr =  "";
$lname = $fname  =  $datenaissance = $gender = $phone = $email = $password =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(isset($_POST["submit"])){

 
    $lname          = test_input(ucwords($_POST["lname"]) );
    $fname          = test_input(ucwords($_POST["fname"]));
    $datenaissance  = test_input($_POST["birthday"]);
    $gender         = test_input($_POST["gender"]); 
    $addrass        = test_input(ucwords($_POST["address"]));
    $phone          = test_input($_POST["phone"]);
    $email          = test_input($_POST["email"]);
    $password       = test_input($_POST["password"]);
    $password2      = test_input($_POST["password2"]);

  
    
  if ($password  == $password2) {
      $sql = "INSERT INTO  patent SET  nom_pat = '$fname', pre_pat ='$lname',  date_niss_pat = '$datenaissance', sexe_pat = '$gender', tel_pat = '$phone', address_pat = '$addrass', email_pat = '$email', pass_pat = '$password'"; 
        if (mysqli_query($conn, $sql)) {
            // echo "New record created successfully it Match";
          } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          header('Location: ../../login/public HTML/index_login.php');
          exit;
        } else {
          $passwordErr = '<script type="text/javascript"> alert("Password Does Not Match ")</script>';
    
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
