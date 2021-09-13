<?php 
include 'counct_db1.php';

// session_start();
$email = $password = $mesgErr ='';
$email_err = $password_err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $email = $_POST['email'];
    $password = $_POST['password_admin'];

  // Validate credentials
  $stmt = $conn->prepare("SELECT *  FROM `medecin` WHERE `email_med` =? AND `pssaword_med` = ? AND `grop_id` = 1" );
  $stmt->execute(array($email, $password));

  $count = $stmt->rowCount();

 
  if ( $count > 0){
    $user = $stmt->fetch();
          $user_id       = $user['ID_med'];
          $user_fname    = $user['nom_med'];
          $user_lname    = $user['pre_med'];
          $user_email    = $user["email_med"];
          $user_password = $user["pssaword_med"];

        // conuct database 
        include "conct_db.php";
        $query = "SELECT * FROM `medecin` WHERE 1 ";
        $result = mysqli_query($conn1, $query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){

                      $row["ID_med"]         = $user["ID_med"].
                      $row["nom_med"]        = $user["nom_med"].
                      $row["pre_med"]        = $user["pre_med"];
                      $row["email_med"]      = $user["email_med"]; 
                }
            }
            else {
            echo ' <h1> Problem in code Php. </h1> <br>';
            }
                  $_SESSION["ID_med"]        = $user_id;# Register Sessioon email
                  $_SESSION["email_med"]     = $email; 
                  $_SESSION["pre_med"]     = $user_lname;
                  $_SESSION["nom_med"]     = $user_fname;
                
                  header('Location: ../../../index.php'); #Redirectto Dashoard page
                  exit();
         }
        
          else{
            $mesgErr =" <div class='alert alert-danger'> The E-mail or Password is incorrect or does not exist, please check it.</div>";
                
        }
}

?>
<a href=""></a>