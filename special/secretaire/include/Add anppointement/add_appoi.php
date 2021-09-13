<?php
include_once "conn_db3.php";

// define variables and set to empty value
$appoin = $date_rdv = $time_rdv = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["appoinement"])) {
    $ID_sec   = $_SESSION['ID_sec'];
    $ID_pat   = $_POST["ID_pat"] ;
    $appoin   = $_POST["objt_rdv"];  
    $date_rdv = $_POST["date_rdv"];  
    $time_rdv = $_POST["time_rdv"];  

    if (empty($_POST["objt_rdv"])) {
      $appoinErr = "Appointment  is required";
    } else {
      $appoin = test_input($_POST["objt_rdv"]);
      
    }
    if (empty($_POST["date_rdv"])) {
      $date_rdvErr = "Appointment Date is required";
    } else {
      $date_rdv = test_input($_POST["date_rdv"]);
      
    }
    if (empty($_POST["time_rdv"])) {
      $time_rdvErr = "Appointment Heur is required";
    } else {
      $time_rdv = test_input($_POST["time_rdv"]);
      
    }

 $sql = "INSERT INTO rendez_vous SET ID_pat = '$ID_pat' ,ID_sec = '$ID_sec' , objt_rdv = '$appoin',  date_rdv = '$date_rdv', time_rdv = '$time_rdv'   "; 
 if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
   } 
   else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }  
}
}
?>
<?php 
mysqli_close($conn);
?>
