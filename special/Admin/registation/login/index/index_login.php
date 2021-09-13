<?php 
session_start();
if ( isset($_SESSION["email_med"]) && isset($_SESSION['nom_med']) && isset($_SESSION['pre_med']) && isset($_SESSION['ID_med'])) {  
    header('Location: ../../../index.php');
    exit();
}
require_once "../Code PHP/index_code.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">

    <!-- Code Css -->
    <link rel="stylesheet" href="../style/style_login.css">
    <!-- ICONS -->
	<link rel="Logo Alaman.png" sizes="76x76" href="../../photo/Logo Alaman.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../photo/Logo Alaman.png">
    <title>Log In Doctor</title>
    

</head>
<body>  
<section class="form-log-in" >
    <div class="container wrrper">
        <div class="heading">
            <h1>Log In</h1>
         </div>
          <!-- action="<?php echo $_SERVER["PHP_SELF"];?>"  -->
 
       <form class="needs-validation form" action=""  method="POST" novalidate>
       <h6 ><?php echo $mesgErr; ?></h6>
             
             <div class="form-row">
               <div class="col-md-12 mb-3">
                  <label class="label-style" for="validationCustom03">Email</label>
                  <input type="email" class="form-control" id="validationCustom03"  name="email" placeholder="Entre Your E-mail" required>
                  <div class="invalid-feedback">Please provide a valid E-mail.</div>
                </div>

                 <div class="col-md-12 mb-3">
                     <label class="label-style" for="validationCustom03">Password</label>
                     <input type="Password" class="form-control" id="validationCustom0" name="password_admin"  placeholder="Entre Your Password" required>
                     <div class="invalid-feedback">Please provide a valid Password. </div>
                 </div>
 
             
             </div>
             <div class="d-grid gap-2 col-6 mx-auto">
                <button  class="btn btn-primary btn-lg btn-block"  type="submit" name="submit">Log In</button>
                <!-- <a href="" class="btn btn-outline-primary">Sign UP</a> -->
            </div>       
           </form> 
           <a href="../../Sing Up/index/index_signup.php" class="btn btn-primary ">Sign Up</a>
    </div>
</section> 
 
      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../javaScript/app.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>