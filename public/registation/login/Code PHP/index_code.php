<?php 
include 'counct_db/counct_db1.php';

// session_start();
$email = $password = $mesgErr ='';
$email_err = $password_err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   

    $email = $_POST['email'];
    $password = $_POST['password'];
 
 // Check if Email is empty
 if(empty(trim($_POST['email']))){
    $email_err = 'Please enter Email.';
  } else{
    $email = trim($_POST['email']);
  }
  // Check if password is empty=
  if(empty(trim($_POST['password']))){
    $password_err = 'Please enter your password.';
  } else{
    $password = trim($_POST['password']);
  }

  // Validate credentials
  $stmt = $conn->prepare("SELECT *  FROM `patent` WHERE `email_pat` =? AND `pass_pat` = ?" );
  $stmt->execute(array($email, $password));

  $count = $stmt->rowCount();

 
  if ( $count > 0){

    $user = $stmt->fetch();

    $user_id          = $user['ID_pat'];
    $user_lname       = $user['pre_pat'];
    $user_fname       = $user['nom_pat'];
    $user_birthday    = $user['date_niss_pat'];
    $user_phone       = $user['tel_pat'];
    $user_address     = $user['address_pat'];
    $user_email       = $user["email_pat"];

        // conuct database 
        include "counct_db/counct_db2.php";
      $query = "SELECT * FROM `patent` WHERE 1 ";
      $result = mysqli_query($conn1, $query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){

                      $row["ID_pat"]            = $user["ID_pat"].
                      $row["pre_pat"]           = $user["pre_pat"].
                      $row["nom_pat"]           = $user["nom_pat"];
                      $row["date_niss_pat"]     = $user["date_niss_pat"]; 
                      $row["tel_pat"]           = $user["tel_pat"];
                      $row["address_pat"]       = $user["address_pat"];
                      $row["email_pat"]         = $user["email_pat"];
                }
            }
            else {
            echo ' <h1> Problem in code Php. </h1> <br>';
            }
                  $_SESSION["ID_pat"]           = $user_id;# Register Sessioon email
                  $_SESSION["pre_pat"]          = $user_lname;
                  $_SESSION["nom_pat"]          = $user_fname;
                  $_SESSION["date_niss_pat"]    = $user_birthday ;
                  $_SESSION["tel_pat"]          = $user_phone;
                  $_SESSION["address_pat"]      = $user_address; 
                  $_SESSION["email_pat"]        = $user_email; 
                  header('Location: ../../../Home/index_Home.php'); #Redirectto Dashoard page
                  exit();
         }
          else{
            $mesgErr = "<div class='error2'> The E-mail or Password is incorrect or does not exist, please check it.</div>";
                
        }
}

?>















