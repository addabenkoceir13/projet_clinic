<?php
include_once "../conn_db.php";

$id4 = $_GET["id4"];

        $sql = "DELETE FROM `service` WHERE `ID_srv` = '$id4'";
            if (mysqli_query($conn, $sql)) {
              echo "This service account has been deleted";
            } else {
              echo "Error deleting record: " . mysqli_error($conn);
            }
     header('Location: ../../medical.php');
     exit;

?>
