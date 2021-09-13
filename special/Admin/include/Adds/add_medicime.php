<?php
include_once "conn_db.php";
// include_once "../../adda.php";

$lname1 = $lname2 ='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(isset($_POST["medicine"])){
  
      $lname1    = test_input(ucwords($_POST["medicine1"]) );
      $quantity    = test_input($_POST["quantity"]);
      $times    = test_input($_POST["times"]);
      $type    = test_input(ucwords($_POST["type"]));
  
      
      

       
// INSERT Data Medicement
$sql = "INSERT INTO medicament SET `nom_medic` = '$lname1', `type_medic` = '$type'";
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
$sql3 = "INSERT INTO posologie SET `id_medic` = $id_medi, `quantite`= '$quantity', `posologie`= '$times'";
 if (mysqli_query($conn, $sql3)) {
   echo "New record created successfully 02 <br>";
 } else {
   echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
 }
         

  }
  

  if(isset($_POST["analysis"])){
  
    $lname1    = test_input(ucwords($_POST["analysis1"]));
    $lname2    = test_input(ucwords($_POST["analysis2"]));
  
    
        $sql2 = "INSERT INTO `analyse`( `name_ana`) VALUES ('$lname1')" ;
         
        if (mysqli_query($conn, $sql2)) {
            // echo "New record created successfully it Match";
       } else { echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);}
      
       if (isset($_POST["analysis"])) {
        header('Location: adda.php');
        exit;
       }

  }

    if(isset($_POST["scan"])){
     
     $lname1    = test_input(ucwords($_POST["scan1"]) );
     $lname2    = test_input(ucwords($_POST["scan2"]));
    
     
     $sql2 = "INSERT INTO `radio`( `name_scan`) VALUES ('$lname1')" ;
    
     if (mysqli_query($conn, $sql2)) {
       // echo "New record created successfully it Match";
      } else { echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);}
    
     if (isset($_POST["scan"])) {
     header('Location: adda.php');
     exit;
    }
  }

  if(isset($_POST["services"])){
     
    $lname1    = test_input(ucwords($_POST["services1"]) );
    $lname2    = test_input($_POST["id_dot"]);
   
    
    $sql2 = "INSERT INTO `service`( `ID_med`, `nom_srv`) VALUES ('$lname2','$lname1')" ;
   
    if (mysqli_query($conn, $sql2)) {
      // echo "New record created successfully it Match";
     } else { echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);}
   
    if (isset($_POST["services"])) {
    header('Location: adda.php');
    exit;
   }
 }
 


  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  mysqli_close($conn);
?>
<a href="../../adddoctor.php"></a>