<?php 
include_once  "conn_db.php";

// define variables and set to empty values
$lname = $fname  =  $datenaissance = $gender = $phone = $email = $password =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST["submit"])){
    $lname          = test_input(ucwords($_POST["lname"]) );
    $fname          = test_input(ucwords($_POST["fname"]));
    $datenaissance  = test_input($_POST["birthday"]);
    $gender         = test_input($_POST["gender"]);
    $phone          = test_input($_POST["phone"]);
    $addres          = test_input($_POST["addres"]);
    $email          = test_input($_POST["email"]);
    $password       = test_input($_POST["password"]);

 
$sql = "INSERT INTO  patent SET  pre_pat ='$lname', nom_pat = '$fname', date_niss_pat = '$datenaissance', sexe_pat = '$gender', tel_pat = '$phone', address_pat = '$addres',
          email_pat = '$email', pass_pat = '$password' "; 
    if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully it Match";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} 

  if(isset($_POST["modifi"])){
    $id_sec         = $_POST["IDSEC"];
    $lname          = test_input(ucwords($_POST["lname"]) );
    $fname          = test_input(ucwords($_POST["fname"]));
    $datenaissance  = test_input($_POST["birthday"]);
    $gender         = test_input($_POST["gender"]);
    $phone          = test_input($_POST["phone"]);
    $email          = test_input($_POST["email"]);
    $password       = test_input($_POST["password"]);

 
$sql2 = "UPDATE `secretaire` SET   pre_sec ='$lname', nom_sec = '$fname', date_niss_sec = '$datenaissance', sexe_sec = '$gender', tel_sec = '$phone',
          email = '$email', password = '$password' WHERE `ID_sec` = '$id_sec'"; 
    if (mysqli_query($conn, $sql2)) {
        // echo "New record created successfully it Match";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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


