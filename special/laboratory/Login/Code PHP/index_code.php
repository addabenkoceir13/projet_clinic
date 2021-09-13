<?php 
include 'counct_db1.php';

// session_start();
$email = $password = $mesgErr ='';
$email_err = $password_err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   

    $email = $_POST['email'];
    $password = $_POST['password_admin'];
 
 // Check if Email is empty
 if(empty(trim($_POST['email']))){
    $email_err = 'Please enter Email.';
  } else{
    $email = trim($_POST['email']);
  }
  // Check if password is empty
  if(empty(trim($_POST['password_admin']))){
    $password_err = 'Please enter your password.';
  } else{
    $password = trim($_POST['password_admin']);
  }

  // Validate credentials
  $stmt = $conn->prepare("SELECT *  FROM `secretaire` WHERE `email` =? AND `password` = ? AND `grop_id` = 2" );
  $stmt->execute(array($email, $password));

  $count = $stmt->rowCount();

 
  if ( $count > 0){
    $user = $stmt->fetch();
          $user_id       = $user['ID_sec'];
          $user_lname    = $user['pre_sec'];
          $user_fname    = $user['nom_sec'];
          $user_email    = $user["email"];
          $user_password = $user["password"];

        // conuct database 
        include "conct_db.php";
        $query = "SELECT * FROM `secretaire` WHERE 1 ";
        $result = mysqli_query($conn1, $query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){

                      $row["ID_sec"]       = $user["ID_sec"].
                      $row["nom_sec"]      = $user["nom_sec"].
                      $row["pre_sec"]      = $user["pre_sec"];
                      $row["email"]        = $user["email"]; 
                     

            
                }
            }
            else {
            echo ' <h1> Problem in code Php. </h1> <br>';
            }
                  $_SESSION["ID_sec"]    = $user_id;# Register Sessioon email
                  $_SESSION["email"]     = $email; 
                  $_SESSION["pre_sec"]   = $user_lname;
                  $_SESSION["nom_sec"]   = $user_fname;
                
                  header('Location: ../../index.php'); #Redirectto Dashoard page
                  exit();
         }
        
          else{
            $mesgErr = "<div class='error2'> The E-mail or Password is incorrect or does not exist, please check it.</div>";
                
        }
}

?>
<a href=""></a>