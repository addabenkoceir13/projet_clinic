<?php
include_once "conn_db.php";

$id_patient = $id_doctor =  $age_pat = $id_appo = $Pharmas = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //  Give a recipe for treatment
    if(isset($_POST["examination"])){
  
       $id_patient = $_POST["id_patient"];
       $id_doctor  = $_POST["id_doctor"];
       $age_pat    = $_POST["age"];
       $id_appo    = $_POST["id_appo"];

       $Pharmas    = $_POST["Pharmas"];
       $Pharma_chk = "";

          foreach ($Pharmas as $Pharma_ins) {
            $Pharma_chk .= $Pharma_ins.",/";
          }
        
// INSERT Data Consultaion
$sql = "INSERT INTO consultaion SET `ID_med` = $id_doctor ";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully 01 <br>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

// SELECT data Id cons
$sql2 = "SELECT * FROM `consultaion`";
  $reulte = mysqli_query($conn,$sql2);
    if (mysqli_num_rows($reulte) > 0) {
      while($row = mysqli_fetch_assoc($reulte)) {
            $id_cons   = $row["id_cons"]; 
            $date_cons = $row["date_cons"]; 
            $time_cons = $row["heur_cons"]; 
      }
    }

$lname = $fname = '';
$qeury = "SELECT * FROM `patent` WHERE `ID_pat`= '$id_patient'";
  $reulte = mysqli_query($conn,$qeury);
    if (mysqli_num_rows($reulte) > 0) {
      while($row = mysqli_fetch_assoc($reulte)) {
          $fname = $row["nom_pat"]; 
          $lname = $row["pre_pat"];
      }
    }
     
          session_start();
             $_SESSION['id_patient']  = $id_patient;
             $_SESSION['fname_pat']   = $fname;  
             $_SESSION['lname_pat']   = $lname; 
             $_SESSION['age']         = $_POST["age"];

             $_SESSION['Pharmas']     = $Pharmas; 
    
                
// insert orddones
$sql3 = "INSERT INTO ordonnance SET `id_cons` = $id_cons, `nom_pat`= '$fname', `pre_pat`= '$lname ',`age`= '$age_pat',`date`= '$date_cons',`huer_con`= '$time_cons',
                 `lname_clinic` = 'EL AMEN' ,`treatement` = '$Pharma_chk', group_id = 1";
  if (mysqli_query($conn, $sql3)) {
    echo "New record created successfully 02 <br>";
  } else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
  }
          
} 



             
             

           header('Location:../../../ordonec.php');
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

<a href="../../../examining.php"></a>