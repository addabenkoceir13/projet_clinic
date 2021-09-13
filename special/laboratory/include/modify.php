<?php 
include_once  "conn_db.php";

// define variables and set to empty values
$lname = $fname  =  $datenaissance = $gender = $phone = $email = $password =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
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
          email = '$email', password= '$password' WHERE `ID_sec` = '$id_sec'"; 
    if (mysqli_query($conn, $sql2)) {
        // echo "New record created successfully it Match";
    } else {
        echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
    }
} 



header('Location: ../page-profile.php');
exit();

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


mysqli_close($conn);
?>
<a href="../page-profile.php"></a>

