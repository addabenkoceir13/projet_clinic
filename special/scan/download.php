
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


$sql = "SELECT * FROM `resultab` WHERE `id` = '$id_analyse'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   
    $file     = $row['result_scan'];
    $fileName = 'Result scan/'.$row['result_scan'];

    header('Content-type: application/pdf' );
    header('Content-Disposition: inline; fileName="'. $fileName. '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    @readfile($file);


  }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Analyse PDF</title>
</head>
<body>
    
</body>
</html>