<?php
include_once "counct_db.php";
    $id_sec = $_GET["id_sce"];
    $id_rdv = $_GET["id_rdv"];

echo"<br> Hello <br>";


$sql7 = "UPDATE `rendez_vous` SET `ID_sec`= '$id_sec' WHERE `ID_RDv` = '$id_rdv'";

if (mysqli_query($conn, $sql7)) {
  echo "Record updated successfully <br>";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
header('Location: ../../secretaire/index.php');
exit();

mysqli_close($conn);
?>