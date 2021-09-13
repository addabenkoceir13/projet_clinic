<?php
include_once "../conn_db.php";

$id1 = $_GET["id1"];
$id2 = $_GET["id2"];

$sql = "DELETE FROM `pharmac` WHERE `id_pha` = '$id1'";
    if (mysqli_query($conn, $sql)) {
      echo "This medical account has been deleted";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }

$sql = "DELETE FROM `posologie` WHERE `id` = '$id2'";
if (mysqli_query($conn, $sql)) {
  echo "This medical account has been deleted";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
     header('Location: ../../medical.php');
     exit;

?>
