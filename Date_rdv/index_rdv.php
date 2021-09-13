<?php
session_start();
if ( isset($_SESSION['ID_pat']) && isset($_SESSION['pre_pat']) && isset($_SESSION['nom_pat']) && isset($_SESSION["date_niss_pat"])
 && isset($_SESSION["email_pat"]) && isset($_SESSION["tel_pat"]) && isset($_SESSION["address_pat"])) { 
    $_SESSION['ID_pat'];
    $_SESSION['pre_pat'];
    $_SESSION['nom_pat'];
    $_SESSION['date_niss_pat'];
    $_SESSION['tel_pat'];
    $_SESSION['email_pat'];
    $_SESSION['address_pat'];
} 
else {
    header('Location: ../public/registation/login/public HTML/index_login.php');
    exit();
}

include_once "include/conn_db.php";

?>
<a href="../"></a>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css.map">
    <!-- ICONS -->
    <link rel="Logo Alaman.png" sizes="76x76" href="../photo/Logo Alaman.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../photo/Logo Alaman.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="style CSS/style_rdv.css">
    <link rel="stylesheet" href="style CSS/style_phone.css">
    <!-- ICONS -->
    <link rel="Logo Alaman.png" sizes="76x76" href="photo/Logo Alaman.png">
    <link rel="icon" type="image/png" sizes="96x96" href="photo/Logo Alaman.png">
    <title>Appointment</title>
  </head>
<body>
    <!-- Start ... code JS  -->
    <script>
        function ButtBack() {
            window.history.back();
        }
    </script>
<!-- end ... code JS  -->

<div class="back">
  <button class="btn btn-outline-primary" type="submit" onclick="ButtBack()"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Back</button>
</div>

<!-- Start ... Code for  Title clinic El-AMEN part one  ... -->
   <div class="row">
       <div class="col-md-12">
        <section>
            <div class="clinic">
                <h4 class="elamen">EL-AMEN</h4><h4 class="datc"> Diagnostic And Treatment Clinic</h4>
             </div> 
        </section>
       </div>
   </div>
  <!-- end ... Code for  Title clinic El-AMEN part one  ... -->

   <!-- Start ... Code for  Logo RDV  part Two  ... -->
<section>
    <div class="logo-rdv">
        <div class="log-rdv-text">
            <h1>Hello, Book An Appointment From Your Home.</h1>
            <h3>The clinic <span>EL-AMEN</span> provides you with free online appointment booking.</h3>
        </div>
    </div>
</section>
     <!-- end ... Code for  Logo RDV  part Two  ... -->
            
<!-- Start ... CODE FOR MANKE APPOINTEMENT -->
<div class="appointment">
    <h1>Book your appointment now</h1>
    <h3>Fill out a form</h3>
</div>
<div class="form01">
<div class="container">
<form action="index.php" method="POST" class="row g-3 needs-validation " novalidate>
        <input type="hidden" name="id_pat" value="<?php echo $_SESSION['ID_pat'] ?>">
        <div class="col-md-6 mb-4">
          <label for="validationCustom01" class="form-label">First name</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-user" ></i></span>
            <input type="text" class="form-control" id="validationCustom01"  value="<?php echo $_SESSION['pre_pat'] ?>" disabled>
          <div class="invalid-feedback">Please enter your First Name !</div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <label for="validationCustom02" class="form-label">Last name</label>
          <div class="input-group has-validation">
             <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-user" ></i></span>
             <input type="text" class="form-control" id="validationCustom02"  value="<?php echo $_SESSION['nom_pat'] ?>" disabled>
             <div class="invalid-feedback">Please enter your Last Name!</div>
          </div>
       </div>
    
    
   
        <div class="col-md-6 mb-3">
          <label for="validationCustomUsername" class="form-label">Birthday</label>
          <div class="input-group has-validation">
            <span class="input-group-text" ><i class="fa fa-calendar" ></i></span>
            <input type="date" class="form-control" id="validationCustomUsername"  value="<?php echo $_SESSION['date_niss_pat'] ?>" disabled>
            <div class="invalid-feedback">Please enter your Birthday.</div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationCustom03" class="form-label">Address</label>
             <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustom03"  value="<?php echo $_SESSION['address_pat'] ?>" disabled>
                <div class="invalid-feedback"> Please enter your Address.</div>
            </div>
        </div>
    
    

    
        <div class="col-md-6 mb-6">
          <label for="validationCustomUsername" class="form-label">Phone</label>
            <div class="input-group has-validation">
               <span class="input-group-text" ><i class="fa fa-phone-square" ></i></span>
               <input type="tel" class="form-control" id="validationCustomUsername"   value="<?php echo $_SESSION['tel_pat'] ?>" disabled>
               <div class="invalid-feedback">Please enter your phone.</div>
             </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationCustom03" class="form-label">Email</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-envelope" ></i></span>
                <input type="text" class="form-control" id="validationCustom03"  value="<?php echo $_SESSION['email_pat'] ?>" disabled>
                <div class="invalid-feedback"> Please enter your Email.</div>
            </div>
        </div>
    


    
        <div class="col-md-12 mb-12">
            <label for="validationCustom04" class="form-label">Choose the service you want</label>
            <select class="form-control" id="validationCustom" name="objt_rdv" required>
            <option value="" selected disabled >Choose The Service</option>
              <?php 
                $sql = "SELECT * FROM service";
                  $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {?>
                <option value="<?php echo $row["nom_srv"]   ?>"><?php echo $row["nom_srv"]  ?></option>
              <?php  }
                } else {
                  echo "0 results";
                } ?>
            </select>
            <div class="invalid-feedback"> Please select a valid state.</div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationCustomUsername" class="form-label">Choose The date appointment</label>
            <div class="input-group has-validation">
              <span class="input-group-text" ><i class="fa fa-calendar" ></i></span>
              <input type="date" class="form-control" id="validationCustomUsername" name="date_rdv" min="<?php echo date("Y-m-d"); ?>" required>
              <div class="invalid-feedback">Please enter your Birthday.</div>
        </div>
 
    <div class="col-12">
      <button class="btn btn-primary btn-block" type="submit" name="appointment" >Make An Appointment</button>
    </div>   
</form>
<div class="text-center">
<a href="numbre_rdv.php" class="btn btn-outline-primary "> <i  class="fa fa-minus-circle"></i>Cancel Appointment</a>

</div>
 </div>
</div></div>

 <!-- start ... code  for More Details parti nine   -->
 <footer>
    <div class="row information">
        <div class="col-md-3 information-clinic">
            <img src="photo/Logo Alaman.png" alt="Logo">
            <h2>El AMEN Clinic </h2>
            <p>El AMEN Clinic is a modern and advanced medical and 
                surgical clinic located in Chattia-Chlef-Algiers
            </p>
        </div>

        <div class="col-md-3 information-clinic">

            <h4>Our Doctor</h4><br>
            <!-- <a href="">Doctor Zair</a> <br> -->
            <a href="index_DrElHadj.html">Doctor El Hadj Hamed</a> <br>
            <a href="index_DrAmar.html">Doctor Amar</a> <br>
            <a href="index_DrWahiba.html">Doctor Zidane Wahiba</a> <br>
            <a href="index_DrAdjal.html">Doctor Adjal</a> <br>
            <a href="index_DrMedjrouni.html">Doctor Medjrouni</a> <br>
            <a href="index_DrGacem.html">Doctor Gacem</a> <br>

        </div>

        <div class="col-md-3 information-clinic">
            <h4>More Details</h4>
            <a href="../../public/Home/index_Home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a> <br>
            <a href=""><i class="fa fa-user-o" aria-hidden="true"></i>About Clinic</a>
            <p>Work Days</p>
            <ul>
                <li><i class="fa  fa-clock-o" aria-hidden="true"></i>Saturday</li>
                <li><i class="fa  fa-clock-o" aria-hidden="true"></i>Sunday</li>
                <li><i class="fa  fa-clock-o" aria-hidden="true"></i>Monday</li>
                <li><i class="fa  fa-clock-o" aria-hidden="true"></i>Tuesday</li>
                <li><i class="fa  fa-clock-o" aria-hidden="true"></i>Wednesday</li>
                <li><i class="fa  fa-clock-o" aria-hidden="true"></i>Friday</li>
            </ul>
            <!-- <p>7/7Days 24/24H</p> -->
        </div>
        <div class="col-md-3 information-clinic">
            <h4>Call Us</h4>
            <a href="tel:0541151855" ><i class="fa fa-mobile" aria-hidden="true"></i>0541151855</a> <br>
           <a href="tel:027735041" ><i class="fa fa-volume-control-phone" aria-hidden="true"></i>027735041</a> <br>
            <a href="tel:027731662"><i class="fa fa-fax" aria-hidden="true"></i>027731662</a> <br> <br><br>
            <a href="mailto:nabilchu2000@yahoo.fr"><i class="fa fa-envelope" aria-hidden="true"></i>nabilchu2000@yahoo.fr</a> <br><br>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>Hay Ladjraf R.R.N° 19 Chattia-Chlef-Algiers</p>
        </div>
        <div class="social-networking">
            <a class="fas" href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="">            <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a class="fas" href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
        </div>
        <p class="para" >El-AMEN. All rights reserved. 2021 &#169</p>
    </div>
 </footer>
            <!-- end ... code  for More Details parti nine   -->





















<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

</script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    
</body>
</html>