<?php
session_start();
if ( isset($_SESSION["email_pat"]) && isset($_SESSION['pre_pat']) && isset($_SESSION['nom_pat']) && isset($_SESSION['ID_pat']) && isset($_SESSION['address_pat']) ) {  
    header('Location: ../../../Home/index_Home.php');
    exit();
}
include_once  '../Code PHP/index_code.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Style CSS/style_login.css">
    <link rel="stylesheet" href="../Style CSS/style_login_phone.css">
    <!-- ICONS -->
	<link rel="Logo Alaman.png" sizes="76x76" href="../photo/Logo Alaman.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../photo/Logo Alaman.png">
    <title>Log in </title>
</head>
<body>
    <div class="wrpper">

        <h1>Log in </h1>
         <p></p>
         <div class="photo_left">
            <img src="../photo/undraw_medicine_b1ol.svg" alt="svg">
         </div>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="POST">
        <h4 > <?php echo $mesgErr; ?></h4>

        <!-- Enter Email @ -->
            <div class="field_log ">
                <div class="input_field">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="email"  id="email" name="email" placeholder="Enter Your Email" value="" required>        
                </div>
                <div class="error">
                    <span class="error_e"><?php echo $email_err; ?></span>
                </div>
        <!-- Enter Password *******  -->

                <div class="input_field  ">
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    <input type="password" id="password" name="password" placeholder="Enter Your Password" value="" required>
                </div>
                <div class="error">
                    <span  class="error_e"><?php echo $password_err; ?></span><br>
                </div>   
                <button type="submit" name="submit" id="Envoye">Log in</button>
            </div>


            <!-- <a class="link" href="http://" target="_blank" rel="noopener noreferrer">Forgot Password ?</a><br> -->

        </form>
        <a class="sing" href="../../sigup/public HTML/index_singup.php" target="_blank" rel="noopener noreferrer">Sign Up</a>
    </div>
</body>
</html>
<!-- <a href="../../../Home/index_Home.html"></a> -->