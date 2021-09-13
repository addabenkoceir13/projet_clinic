<?php
// session_start();
include_once "counct_db.php";


// define variables and set to empty values
// $lname = $fname  = $email = $password = $groupID = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(isset($_POST["submit"])){

    $lname    = test_input(ucwords($_POST["lname"]) );
    $fname    = test_input(ucwords($_POST["fname"]));
    $birthday = test_input($_POST["birthday"]);
    $gebder   = test_input($_POST["gender"]);
    $grop     = test_input($_POST["grop_id"]);
    $phone    = test_input($_POST["phone"]);
    $email    = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    
  $sql2 = "INSERT INTO `medecin`( `nom_med`, `pre_med`, `date_med`, `sexe_med`, `tel_med`, `email_med`, `pssaword_med`, `grop_id`)
   VALUES ( '$fname','$lname','$birthday','$gebder','$phone ','$email','$password',' $grop')" ;
  if (mysqli_query($conn, $sql2)) {
      // echo "New record created successfully it Match";
} else {
      echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
if (isset($_POST["submit"])) {
  header('Location: ../../../adddoctor.php');
  exit;
}
 
} 
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
//   $data = ucwords($data);
  return $data;
 
}
 

mysqli_close($conn);
?>

