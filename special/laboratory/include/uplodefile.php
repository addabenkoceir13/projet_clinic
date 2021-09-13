<?php
include "conn_db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["send_analyse"])) {

              ////////////////////////
              //                    //
              //           DATA     //
              //                    //
              ////////////////////////

        
        
        $id_cons       = test_input($_POST["id_cons"]);
        $date_analysis = test_input($_POST["date_analysis"]);
        $file_pat      = $_FILES["file"]["name"];

              ////////////////////////
              //                    //
              //    INSERT DATA     //
              //                    //
              ////////////////////////

$sql2 = "INSERT INTO  `resultaa` SET `id_cons`= '$id_cons', `resulta_analyse` = '$file_pat', `date` = '$date_analysis'";
// $sql2  = "INSERT INTO `resultaa`( `id_cons`, `id_ana`, `resulta_analyse`, `date`) VALUES ('$id_cons','$Id_analysis','$file_pat','$date_analysis')";

  if (mysqli_query($conn, $sql2)) {
    move_uploaded_file($_FILES["file"]["tmp_name"], '../Result Analyse/'.$file_pat);
    echo "New record created successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
             
   
    }
    header('Location: ../result.php');
    exit();
}



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   
  }
mysqli_close($conn);

?>
<a href="../Result Analyse/"></a>