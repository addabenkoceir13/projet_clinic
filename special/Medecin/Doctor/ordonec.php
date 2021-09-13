<?php
// Start Seesion
session_start();
if (isset( $_SESSION['fname_pat'])  && 
    isset( $_SESSION['lname_pat'])  && 
    isset( $_SESSION['age'])        && 
    isset( $_SESSION['id_patient']) &&

    isset( $_SESSION['Pharmas']

   
    
    ) 
) {
   $pharmas    = $_SESSION['Pharmas'];
   $id_patient = $_SESSION['id_patient'];
   $fname_pati = $_SESSION['fname_pat'];
   $lname_pati = $_SESSION['lname_pat'];
   $age_pati   = $_SESSION['age'];
}

$pharmas    = $_SESSION['Pharmas'];
$id_patient = $_SESSION['id_patient'];
$fname_pati = $_SESSION['fname_pat'];
$lname_pati = $_SESSION['lname_pat'];
$age_pati   = $_SESSION['age'];


$Pharma_chk = "";

  

  foreach ($pharmas as  $value2) {
    $pharm = $value2 ."<br>";
  }
// Connected Database
include_once "conn_db.php";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">

    <!-- Code Css -->
    <link rel="stylesheet" href="css/style CSS/style.css">

    <!-- ICONS -->
    <link rel="Logo Alaman.png" sizes="76x76" href="../photo/Logo Alaman.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../photo/Logo Alaman.png">
    <title>Prescription</title>
    

</head>
<body>
    <main  class="container">

       <div class="box_bor">
           <div class="head">
               <h1 class="heading1">عيادة التشخيص و العلاج الأمان </h1>
               <h1 class="heading2">EL-AMEN Diagnostic And Treatment Clinic</h1>
           </div>
           <div class="row">
            <div class="col stylr_left" >
                <h5 class="Display-3">Hay Ladjraf 19 Chattia-Chlef</h5>
                <h5 class="Display-3">027735041/0541151859</h5>
                <h5 class="Display-3">nabilchu2000@yahoo.fr</h5>
            </div>
            <div class="col" >
                <img style="width: 150px;" src="photo/Logo Alaman.png" alt="">
            </div>
            <div class="col stylr_regit" >
                <h5 class="Display-4">First Name: </h5><h6> <?php echo $_SESSION['fname_pat']?></h6><br>
                <h5 class="Display-4">Last Name:  </h5><h6> <?php echo $_SESSION['lname_pat']?></h6> <br>
                <h5 class="Display-4">Age:        </h5><h6> <?php echo $_SESSION['age']?></h6><br>
                <h5 class="Display-4">Date:       </h5><h6> <?php echo date("d-m-Y")?> </h6><br>
            </div>
          </div>
          <div class="presc">
              <div class=" postion-top">
                <h1  class="heading3">Prescription</h1>
              </div>
                <div class="tratement" style="height: 500px;">
                        <?php 
                          foreach ($pharmas as $Pharma_ins) {
                              echo " <h5>* ". $Pharma_ins."<br></h5>";
                               }
                          ?>
                       
                </div>
                
          </div>
          <h1 class="heading1">العقل السليم في الجسم السليم  </h1>
          <a href="index.php" class="btn btn-outline-primary">Examination of another patient</a>
       </div>
    </main>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../javaScript/app.js"></script>
</body>