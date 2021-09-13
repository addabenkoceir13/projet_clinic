<?php
// session_start();
include_once "counct_db.php";


// define variables and set to empty values
// $lnameErr = $fnameErr = $datenaissanceErr = $genderErr = $groupIDErr = $emailErr = $passwordErr =  "";

// $lname = $fname  = $email = $password = $groupID = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(isset($_POST["submit"])){

    $lname    = test_input(ucwords($_POST["lname"]) );
    $fname    = test_input(ucwords($_POST["fname"]));
    $birthday = test_input($_POST["birthday"]);
    $gebder   = test_input($_POST["gender"]);
    $phone    = test_input($_POST["phone"]);
    $email    = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $gropid   = test_input($_POST["grop_id"]);
    
  $sql2 = "INSERT INTO `secretaire`(`nom_sec`, `pre_sec`, `date_niss_sec`, `sexe_sec`, `tel_sec`, `email`, `password`, `grop_id`)
   VALUES ( '$fname','$lname','$birthday','$gebder','$phone ','$email','$password','$gropid')" ;
  if (mysqli_query($conn, $sql2)) {
      // echo "New record created successfully it Match";
} else {
      echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
if (isset($_POST["submit"])) {
  header('Location: ../../addsecretary.php');
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
<a href=""></a>