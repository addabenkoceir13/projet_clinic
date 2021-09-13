<?php
include_once "conn_db.php";

$nameanalysis = $namescan =   '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //  Give a recipe for treatment
if(isset($_POST["addanalysis"])){
  
       $nameanalysis = $_POST["nameanalysis"];

        
// INSERT Data Medicement
$sql = "INSERT INTO analyse SET `name_ana` = '$nameanalysis'";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully 01 <br>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
           header('Location:../../../analyse.php');
           exit();
} 


if(isset($_POST["addascan"])){
    $namescan = $_POST["nameascan"]; 
// INSERT Data Medicement
$sql = "INSERT INTO radio SET `name_scan` = '$namescan'";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully 01 <br>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
           header('Location:../../../scan.php');
           exit();
} 



}

  mysqli_close($conn);
 
?>

