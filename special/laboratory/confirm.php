<?php 

$id_analyse =$_GET["id_analyse"];

include "include/conn_db.php";

if (isset($_GET["id_analyse"])) {
    $id_analyse = $_GET["id_analyse"];
    echo " Is March <br>";
}
else {
    echo " Sorry not GET";
}


$sql = "SELECT * FROM `resultaa` WHERE `id` = '$id_analyse'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   
    $file     = 'Result Analyse/'.$row['resulta_analyse'];
    $fileName = $row['resulta_analyse'];

    header('Content-type: application/pdf' );
     readfile($file);


  }
}
else {
  echo "<h1> Sorry Not Analysis</h1>";
}


 ?>
 
