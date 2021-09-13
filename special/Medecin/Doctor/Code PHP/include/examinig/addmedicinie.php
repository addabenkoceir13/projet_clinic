<?php
include_once "conn_db.php";

$id_patient = $id_doctor =  $age_pat = $id_appo = $Pharmas = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //  Give a recipe for treatment
    if(isset($_POST["medicine"])){
  
       $medicine = $_POST["namemedicine"];
       $quantity = $_POST["quantit"];
       $time     = $_POST["times"];
       $type     = $_POST["type_medi"];

        
// INSERT Data Medicement
$sql = "INSERT INTO medicament SET `nom_medic` = '$medicine', `type_medic` = '$type'";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully 01 <br>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

// SELECT data Id cons
$sql2 = "SELECT * FROM `medicament`";
  $reulte = mysqli_query($conn,$sql2);
    if (mysqli_num_rows($reulte) > 0) {
      while($row = mysqli_fetch_assoc($reulte)) {
            $id_medi   = $row["id_medic"]; 
      }
    }
              
// insert orddones
$sql3 = "INSERT INTO posologie SET `id_medic` = $id_medi, `quantite`= '$quantity', `posologie`= '$time'";
  if (mysqli_query($conn, $sql3)) {
    echo "New record created successfully 02 <br>";
  } else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
  }
          
} 


           header('Location:../../../examining.php');
           exit();
} 



  mysqli_close($conn);



   
?>

<a href="../../../examining.php"></a>