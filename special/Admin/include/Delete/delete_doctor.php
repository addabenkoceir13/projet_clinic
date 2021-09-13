<?php
include_once "../conn_db.php";

$id_med = $_GET["id_doctor"];

echo $id_med;

  $sql = "DELETE FROM `medecin` WHERE `ID_med` = '$id_med'";

  if (mysqli_query($conn, $sql)) {
    echo "This patient account has been deleted";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  
    header('Location: ../../adddoctor.php');
    exit;
  
?>
<a href="../../adddoctor.php"></a>