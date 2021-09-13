<?php
include_once "../conn_db.php";

$id2 = $_GET["id2"];

        $sql = "DELETE FROM `analyse` WHERE `Id_ana` = '$id2'";
            if (mysqli_query($conn, $sql)) {
              echo "This medical account has been deleted";
            } else {
              echo "Error deleting record: " . mysqli_error($conn);
            }
     header('Location: ../../medical.php');
     exit;

?>
