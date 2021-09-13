<?php
include_once "counct_db.php";

$ID_PAT = $_GET["id_RDV"];
$sql = "DELETE FROM rendez_vous WHERE ID_RDv='$ID_PAT'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

header('Location: ../../secretaire/index.php');
exit();
?>
