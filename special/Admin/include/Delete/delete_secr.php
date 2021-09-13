<?php
include_once "../conn_db.php";

$id_sec = $_GET["id_sec"];

echo $id_med;

  $sql = "DELETE FROM `secretaire` WHERE `ID_sec` = '$id_sec'";

  if (mysqli_query($conn, $sql)) {
    echo "This patient account has been deleted";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  header('Location: ../../addsecretary.php');
  exit
?>
<a href="../../addsecretary.php"></a>