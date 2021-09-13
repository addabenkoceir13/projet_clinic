<?php
include_once "../conn_db.php";

$id3 = $_GET["id3"];

        $sql = "DELETE FROM `radio` WHERE `id_radio` = '$id3'";
            if (mysqli_query($conn, $sql)) {
              echo "This medical account has been deleted";
            } else {
              echo "Error deleting record: " . mysqli_error($conn);
            }
     header('Location: ../../medical.php');
     exit;

?>
