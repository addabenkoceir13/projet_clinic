<?php 
session_start();
require_once "../code php/index_code.php";

?>

<!doctype html>
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
    <link rel="stylesheet" href="../style/style_signup.css">
    <!-- ICONS -->
	  <link rel="Logo Alaman.png" sizes="76x76" href="../photo/Logo Alaman.png">
	  <link rel="icon" type="image/png" sizes="96x96" href="../photo/Logo Alaman.png">
    <title>Sign Up </title>
  </head>
  <body>
    
<section class="form-sing-up">
    <div class="container wrrper">
       <div class="heading">
           <h1>Sign Up</h1>
        </div>

        <form class="needs-validation form"  action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" novalidate>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="Entre Your First Name" required>
                <div class="valid-feedback"></div>
                <div style="float: left; margin-left:-130px;" class="invalid-feedback"> Please provide a valid First Name.</div>
              </div>
              <div class="col-md-12 mb-3">
                <input type="text" class="form-control" id="validationCustom02" name="lname" placeholder="Entre Your Last Name" required>
                <div class="valid-feedback"> </div>
                <div style="float: left; margin-left:-130px;" class="invalid-feedback"> Please provide a valid Last Name.</div>
              </div>
              <div class="col-md-12 mb-3">
                <input type="date" class="form-control" id="validationCustom02" name="birthday" placeholder="Entre Your Last Name" required>
                <div class="valid-feedback"> </div>
                <div style="float: left; margin-left:-130px;" class="invalid-feedback"> Please provide a valid Birthay.</div>
              </div>
              <div class="col-md-12 mb-3">
                <input type="tel" class="form-control" id="validationCustom02" name="phone" placeholder="Entre Your Last Name" required>
                <div class="valid-feedback"> </div>
                <div style="float: left; margin-left:-130px;" class="invalid-feedback"> Please provide a valid Phone.</div>
              </div>
              <div class="col-md-12 mb-3">
                <select class="form-control" id="validationCustom" name="gender" required>
                  <option value="" selected disabled >Choose Gender</option>
                  <option value="Man">Man</option>
                  <option value="Woman">Woman</option>
                </select>
                <div style="float: left; margin-left:-130px;" class="invalid-feedback"> Please select a valid state.</div>
              </div>
              <div class="col-md-12 mb-3">
                <select class="form-control" id="validationCustom" name="grop_id" required>
                  <option value="" selected disabled >Choose...</option>
                  <option value="1">Secretary</option>
                  <option value="2">Laboratory</option>
                  <option value="3">Scan</option>
                </select>
                <div style="float: left; margin-left:-130px;" class="invalid-feedback"> Please select a valid state.</div>
              </div>

            </div>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <input type="email" class="form-control" id="validationCustom03"  name="email" placeholder="Entre Your E-mail" required>
                <div style="float: left; margin-left:-130px;" class="invalid-feedback"> Please provide a valid E-mail.</div>
            </div>
                <div class="col-md-12 mb-3">
                    <input type="Password" class="form-control" id="validationCustom0" name="password"  placeholder="Entre Your Password" required>
                    <div style="float: left; margin-left:-130px;" class="invalid-feedback">Please provide a valid Password.</div><br>
              </div>

             
            
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label style="float: left; margin-left:0px;"  class="form-check-label" for="invalidCheck"> Agree to terms and conditions</label>
                <div class="invalid-feedback">You must agree before submitting.</div>
              </div>
            </div>
            
            <button  class="btn btn-primary btn-lg btn-block"  type="submit" name="submit">Sign Up</button>
          </form>
          
    </div>
   
</section>

 

























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../script/app.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>