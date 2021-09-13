<?php
include_once "conn_db4.php";
$id_rdv = $_GET["id_RDv"];
echo "Hello ID: " .$id_pat."<br>";
  $sql = "DELETE FROM `rendez_vous` WHERE `ID_RDv` = '$id_rdv'";

  if (mysqli_query($conn, $sql)) {
    echo "This patient account has been deleted";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  header('Location: ../../secretaire/delete.php');
  exit();
?>
 