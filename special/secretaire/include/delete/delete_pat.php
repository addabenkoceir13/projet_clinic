<?php
include_once "conn_db4.php";
$id_pat = $_GET["id_patient"];
echo "Hello ID: " .$id_pat."<br>";
  $sql = "DELETE FROM `patent` WHERE `ID_pat` = '$id_pat'";

  if (mysqli_query($conn, $sql)) {
    echo "This patient account has been deleted";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  header('Location: ../../secretaire/delete.php');
  exit
?>
 