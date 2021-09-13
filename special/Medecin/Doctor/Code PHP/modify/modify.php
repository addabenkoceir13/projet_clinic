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

 
$sql2 = "UPDATE `medecin` SET   pre_med ='$lname', nom_med = '$fname', date_med = '$datenaissance', sexe_med = '$gender', tel_med = '$phone',
          email_med = '$email', pssaword_med= '$password' WHERE `ID_med` = '$id_sec'"; 
    if (mysqli_query($conn, $sql2)) {
        // echo "New record created successfully it Match";
    } else {
        echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
    }
} 


if(isset($_POST["working"])){
  $id_med     = $_POST["IDSEC"];
  $time_s     = test_input($_POST["time_s"]);
  $time_e     = test_input($_POST["time_e"]);
  $days       = $_POST["days"];
  $days_chk = '';

  foreach ($days as $days_ins) {
    $days_chk  .= $days_ins.",/";
  }

$sql3 = " INSERT INTO calendrier SET Id_med='$id_med',jour_trav_med= '$days_chk',heur_d='$time_s ',heur_f= ' $time_e'"; 
  if (mysqli_query($conn, $sql3)) {
      // echo "New record created successfully it Match";
  } else {
      echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
  }
} 



if(isset($_POST["modify_work"])){
  $id_med     = $_POST["IDSEC"];
  $time_s     = test_input($_POST["time_sm"]);
  $time_e     = test_input($_POST["time_em"]);
  $days       = $_POST["daysm"];
  $days_chk = '';

  foreach ($days as $days_ins) {
    $days_chk  .= $days_ins.",/";
  }

$sql4 = "UPDATE `calendrier` SET  jour_trav_med= '$days_chk',heur_d='$time_s ',heur_f= ' $time_e' WHERE `Id_med`= '$id_med'"; 
  if (mysqli_query($conn, $sql4)) {
      // echo "New record created successfully it Match";
  } else {
      echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
  }
} 
header('Location: ../../profil.php');
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
<a href="../../profil.php"></a>

