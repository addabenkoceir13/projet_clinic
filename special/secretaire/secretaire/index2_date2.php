<?php

session_start();
// if ( ) {
//     $ID_pat = $_SESSION['ID_pat'];
// }


include_once "conn_db2.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// INSERT NEW APPOINTEMENT *****************************
if (isset($_POST["appoinement"])) {
    
    $ID_sec   = $_SESSION['ID_sec'];
    $ID_pat   = $_POST["ID_pat"] ;
    $objt_rdv   = $_POST["objt_rdv"];  
    $date_today = $_POST["date_rdv"]; 
 
}
if (isset($_POST["rdvpatient"])) {

    $ID_pat    = $_POST["ID_pat"];
    $ID_sec    = $_POST["id_sec"];
    $objt_rdv   = $_POST["objet_rdv"];
    $date_rdv   = $_POST["timerdvpat"];
    $date_toda  = $_POST["date_day"];
    

$sql = "INSERT INTO rendez_vous SET ID_pat = '$ID_pat' ,ID_sec = '$ID_sec' , objt_rdv = '$objt_rdv',  date_rdv = '$date_rdv', date_rdv2 = '$date_toda'   "; 
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } 
      else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }  
  header('Location: index.php');
  exit();
  }

    }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//
//                             La Function Date appointement
//
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// $date_today = date("Y-m-d");

if (isset($_POST["sate_sel"])) {

    $date_today = $_POST["datesele"];
}
//  Morning
$time1 =  $date_today." 08:00:00";
$time2 =  $date_today." 08:30:00";
$time3 =  $date_today." 09:00:00";
$time4 =  $date_today." 09:30:00";
$time5 =  $date_today." 10:00:00";
$time6 =  $date_today." 10:30:00";
$time7 =  $date_today." 11:00:00";
$time71 = $date_today." 11:30:00";

// EVENING
$time8  =  $date_today." 13:00:00";
$time9  =  $date_today." 13:30:00";
$time10 =  $date_today." 14:00:00";
$time11 =  $date_today." 14:30:00";
$time12 =  $date_today." 15:00:00";
$time13 =  $date_today." 15:30:00";
$time14 =  $date_today." 16:00:00";
$time15 =  $date_today." 16:30:00";

////////////////////////////////////////////////////////***** TIME 2********* /////////////////////////////////////////////////////////////////////////////////////////////////
$time1a =  $date_today." 08:00:01";
$time2a =  $date_today." 08:30:01";
$time3a =  $date_today." 09:00:01";
$time4a =  $date_today." 09:30:01";
$time5a =  $date_today." 10:00:01";
$time6a =  $date_today." 10:30:01";
$time7a =  $date_today." 11:00:01";
$time71a = $date_today." 11:30:01";

// EVENING
$time8a =  $date_today." 13:00:01";
$time9a =  $date_today." 13:30:01";
$time10a =  $date_today." 14:00:01";
$time11a =  $date_today." 14:30:01";
$time12a =  $date_today." 15:00:01";
$time13a =  $date_today." 15:30:01";
$time14a =  $date_today." 16:00:01";
$time15a =  $date_today." 16:30:01";
////////////////////////////////////////////////////////***** TIME 3********* /////////////////////////////////////////////////////////////////////////////////////////////////
$time1b =  $date_today." 08:00:02";
$time2b =  $date_today." 08:30:02";
$time3b =  $date_today." 09:00:02";
$time4b =  $date_today." 09:30:02";
$time5b =  $date_today." 10:00:02";
$time6b =  $date_today." 10:30:02";
$time7b =  $date_today." 11:00:02";
$time71b = $date_today." 11:30:02";

// EVENING
$time8b  =  $date_today." 13:00:02";
$time9b  =  $date_today." 13:30:02";
$time10b =  $date_today." 14:00:02";
$time11b =  $date_today." 14:30:02";
$time12b =  $date_today." 15:00:02";
$time13b =  $date_today." 15:30:02";
$time14b =  $date_today." 16:00:02";
$time15b =  $date_today." 16:30:02";
////////////////////////////////////////////////////////***** TIME 4********* /////////////////////////////////////////////////////////////////////////////////////////////////
$time1c =  $date_today." 08:00:03";
$time2c =  $date_today." 08:30:03";
$time3c =  $date_today." 09:00:03";
$time4c =  $date_today." 09:30:03";
$time5c =  $date_today." 10:00:03";
$time6c =  $date_today." 10:30:03";
$time7c =  $date_today." 11:00:03";
$time71c = $date_today." 11:30:03";

// EVENING
$time8c  =  $date_today." 13:00:03";
$time9c  =  $date_today." 13:30:03";
$time10c =  $date_today." 14:00:03";
$time11c =  $date_today." 14:30:03";
$time12c =  $date_today." 15:00:03";
$time13c =  $date_today." 15:30:03";
$time14c =  $date_today." 16:00:03";
$time15c =  $date_today." 16:30:03";
////////////////////////////////////////////////////////***** TIME 5********* /////////////////////////////////////////////////////////////////////////////////////////////////
$time1d =  $date_today." 08:00:04";
$time2d =  $date_today." 08:30:04";
$time3d =  $date_today." 09:00:04";
$time4d =  $date_today." 09:30:04";
$time5d =  $date_today." 10:00:04";
$time6d =  $date_today." 10:30:04";
$time7d =  $date_today." 11:00:04";
$time71d = $date_today." 11:30:04";

// EVENING
$time8d  =  $date_today." 13:00:04";
$time9d  =  $date_today." 13:30:04";
$time10d =  $date_today." 14:00:04";
$time11d =  $date_today." 14:30:04";
$time12d =  $date_today." 15:00:04";
$time13d =  $date_today." 15:30:04";
$time14d =  $date_today." 16:00:04";
$time15d =  $date_today." 16:30:04";

////////////////////////////////////////////////////////***** TIME 6********* /////////////////////////////////////////////////////////////////////////////////////////////////
$time1e =  $date_today." 08:00:05";
$time2e =  $date_today." 08:30:05";
$time3e =  $date_today." 09:00:05";
$time4e =  $date_today." 09:30:05";
$time5e =  $date_today." 10:00:05";
$time6e =  $date_today." 10:30:05";
$time7e =  $date_today." 11:00:05";
$time71e = $date_today." 11:30:05";

// EVENING
$time8e  =  $date_today." 13:00:05";
$time9e  =  $date_today." 13:30:05";
$time10e =  $date_today." 14:00:05";
$time11e =  $date_today." 14:30:05";
$time12e =  $date_today." 15:00:05";
$time13e =  $date_today." 15:30:05";
$time14e =  $date_today." 16:00:05";
$time15e =  $date_today." 16:30:05";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-reboot.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/style_rdv.css">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <!-- ICONS -->
    <link rel="Logo Alaman.png" sizes="76x76" href="photo/Logo Alaman.png">
    <link rel="icon" type="image/png" sizes="96x96" href="photo/Logo Alaman.png">
    <title>Appointment Date</title>
  </head>
  <body>
  
<div style="margin-top: 50px;" class="container">
<?php $sql = "SELECT * FROM `rendez_vous` WHERE `objt_rdv` = '$objt_rdv' AND `objt_rdv` = 'Cardiology' ";
        $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) { ?>
<form action="" method="POST" class="row g-3 needs-validation" >
    <input type="hidden" name="id_sec" value="<?php echo $ID_sec; ?>">
    <input type="hidden" name="ID_pat" value="<?php echo $ID_pat; ?>">
    <input type="hidden" name="objet_rdv" value="<?php echo $objt_rdv; ?>">
    <input type="hidden" name="date_day" value="<?php echo $date_today; ?>">

  <div class="note">
     <strong>Note:</strong>
     The Frame in <span class="text-success">green</span>,The time is availble to everyone, But the <span class="text-danger" >red</span> frame has been reserved
    </div>
  <div class="row">
    <!-- 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //
      //                                                 Moorning
      //
      // 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     -->
<div class="col-md-6">
<!--********************************************* Start PHP TIME 1  **************************************************************************************************************************************************-->
        <?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time1'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" ><?php echo $time1?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time1 ?>" checked>
                   <label class="form-check-label" ><?php echo $time1?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 1 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 2  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time2'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time2?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time2 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time2?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 2 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 3  **************************************************************************************************************************************************--->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time3'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time3?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time3 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time3?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 3 -************************************************************************************************************************************************->

<!--********************************************* Start PHP TIME 4  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time4'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time4?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time4 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time4?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 4 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 5  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time5'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time5?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time5 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time5?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 5 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 6  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time6'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time6?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time6 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time6?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 6 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 7 **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time7'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time7?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time7 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time7?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 7-************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 7 **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time71'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time71?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time71 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time71?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 7-************************************************************************************************************************************************-->
</div>

 <!-- 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //
      //                                                 Evening
      //
      // 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     -->
<div class="col-md-6">
<!--********************************************* Start PHP TIME 8  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time8'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time8?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time8 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time8?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 8 -************************************************************************************************************************************************-->
<!--********************************************* Start PHP TIME 9  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time9'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time9?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time9 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time9?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 9 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 10  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time10'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time10?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time10 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time10?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 10 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 11  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time11'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time11?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time11 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time11?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 11 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 12  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time12'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time12?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time12 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time12?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 12 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 13  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time13'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time13?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time13 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time13?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 13 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 14  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time14'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time14?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time14 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time14?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 14 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 15  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time15'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time15?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time15 ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time15?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 3 -************************************************************************************************************************************************-->

</div>

          <button style="margin-top: 30px;" class="btn btn-outline-primary btn-block" name="rdvpatient" type="submit">Make An Appointment</button>
        
</form>
<?php } } ?>
</div>

<!-- 
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                     
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 -->
 <div style="margin-top: 50px;" class="container">
<?php $sql = "SELECT * FROM `rendez_vous` WHERE `objt_rdv` = '$objt_rdv' AND `objt_rdv` = 'Emergency Intensive Care'";
        $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) { ?>
<form action="" method="POST" class="row g-3 needs-validation" >
<input type="hidden" name="id_sec" value="<?php echo $ID_sec; ?>">
    <input type="hidden" name="id_sec" value="<?php echo $ID_sec; ?>">
    <input type="hidden" name="ID_pat" value="<?php echo $ID_pat; ?>">
    <input type="hidden" name="objet_rdv" value="<?php echo $objt_rdv; ?>">
    <input type="hidden" name="date_day" value="<?php echo $date_today; ?>">

  <div class="note">
     <strong>Note:</strong>
     The Frame in <span class="text-success">green</span>,The time is availble to everyone, But the <span class="text-danger" >red</span> frame has been reserved
    </div>
  <div class="row">
    <!-- 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //
      //                                                 Moorning
      //
      // 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     -->
<div class="col-md-6">
<!--********************************************* Start PHP TIME 1  **************************************************************************************************************************************************-->
        <?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time1a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" ><?php echo $time1?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time1a ?>" checked>
                   <label class="form-check-label" ><?php echo $time1?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 1 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 2  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time2a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time2?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time2a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time2?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 2 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 3  **************************************************************************************************************************************************--->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time3a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time3?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time3a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time3?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 3 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 4  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time4a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time4?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time4a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time4?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 4 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 5  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time5a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time5?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time5a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time5?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 5 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 6  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time6a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time6?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time6a?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time6?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 6 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 7 **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time7a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time7a?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time7a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time7?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 7-************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 7 **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time71a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time71?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time71a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time71?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 7-************************************************************************************************************************************************-->
</div>

 <!-- 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //
      //                                                 Evening
      //
      // 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     -->
<div class="col-md-6">
<!--********************************************* Start PHP TIME 8  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time8a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time8?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time8a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time8?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 8 -************************************************************************************************************************************************-->
<!--********************************************* Start PHP TIME 9  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time9a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time9?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time9a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time9?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 9 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 10  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time10a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time10?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time10a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time10?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 10 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 11  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time11a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time11?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time11a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time11?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 11 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 12  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time12a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time12?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time12a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time12?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 12 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 13  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time13a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time13?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time13a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time13?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 13 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 14  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time14a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time14?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time14a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time14?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 14 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 15  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time15a'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time15?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time15a ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time15?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 3 -************************************************************************************************************************************************-->

</div>

          <button style="margin-top: 30px;" class="btn btn-outline-primary btn-block" name="rdvpatient" type="submit">Make An Appointment</button>
        
</form>
<?php } } ?>
</div>

<!-- 
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                     
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 -->
 <div style="margin-top: 50px;" class="container">
<?php $sql = "SELECT * FROM `rendez_vous` WHERE `objt_rdv` = '$objt_rdv' AND `objt_rdv` = 'Radiology Specialized Medical imaging'";
        $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) { ?>
<form action="" method="POST" class="row g-3 needs-validation" >
    <input type="hidden" name="id_sec" value="<?php echo $ID_sec; ?>">
    <input type="hidden" name="ID_pat" value="<?php echo $ID_pat; ?>">
    <input type="hidden" name="objet_rdv" value="<?php echo $objt_rdv; ?>">
    <input type="hidden" name="date_day" value="<?php echo $date_today; ?>">

  <div class="note">
     <strong>Note:</strong>
     The Frame in <span class="text-success">green</span>,The time is availble to everyone, But the <span class="text-danger" >red</span> frame has been reserved
    </div>
  <div class="row">
    <!-- 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //
      //                                                 Moorning
      //
      // 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     -->
<div class="col-md-6">
<!--********************************************* Start PHP TIME 3  **************************************************************************************************************************************************-->
        <?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time1b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" ><?php echo $time1?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time1b ?>" checked>
                   <label class="form-check-label" ><?php echo $time1?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 1 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 2  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time2b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time2?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time2b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time2?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 2 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 3  **************************************************************************************************************************************************--->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time3b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time3?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time3b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time3?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 3 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 4  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time4b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time4?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time4b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time4?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 4 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 5  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time5b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time5?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time5b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time5?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 5 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 6  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time6b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time6?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time6b?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time6?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 6 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 7 **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time7b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time7?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time7b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time7?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 7-************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 7 **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time71b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time71?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time71b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time71?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 7-************************************************************************************************************************************************-->
</div>

 <!-- 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //
      //                                                 Evening
      //
      // 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     -->
<div class="col-md-6">
<!--********************************************* Start PHP TIME 8  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time8b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time8?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time8b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time8?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 8 -************************************************************************************************************************************************-->
<!--********************************************* Start PHP TIME 9  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time9b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time9?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time9b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time9?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 9 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 10  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time10b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time10?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time10b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time10?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 10 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 11  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time11b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time11?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time11b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time11?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 11 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 12  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time12b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time12?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time12b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time12?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 12 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 13  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time13b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time13?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time13b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time13?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 13 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 14  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time14b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time14?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time14b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time14?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 14 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 15  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time15b'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time15?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time15b ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time15?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 3 -************************************************************************************************************************************************-->

</div>

          <button class="btn btn-outline-primary btn-block" name="rdvpatient" type="submit">Make An Appointment</button>
        
</form>
<?php } } ?>
</div>

<!-- 
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                     
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 -->
 <div style="margin-top: 50px;" class="container">
<?php $sql = "SELECT * FROM `rendez_vous` WHERE `objt_rdv` = '$objt_rdv' AND `objt_rdv` = 'Vascular Medicine and Call Vascular'";
        $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) { ?>
<form action="" method="POST" class="row g-3 needs-validation" >
<input type="hidden" name="id_sec" value="<?php echo $ID_sec; ?>">
     <input type="hidden" name="id_sec" value="<?php echo $ID_sec; ?>">
    <input type="hidden" name="ID_pat" value="<?php echo $ID_pat; ?>">
    <input type="hidden" name="objet_rdv" value="<?php echo $objt_rdv; ?>">
    <input type="hidden" name="date_day" value="<?php echo $date_today; ?>">

  <div class="note">
     <strong>Note:</strong>
     The Frame in <span class="text-success">green</span>,The time is availble to everyone, But the <span class="text-danger" >red</span> frame has been reserved
    </div>
  <div class="row">
    <!-- 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //
      //                                                 Moorning
      //
      // 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     -->
<div class="col-md-6">
<!--********************************************* Start PHP TIME 3  **************************************************************************************************************************************************-->
        <?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time1c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" ><?php echo $time1?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time1c ?>" checked>
                   <label class="form-check-label" ><?php echo $time1?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 1 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 2  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time2c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time2?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time2c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time2?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 2 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 3  **************************************************************************************************************************************************--->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time3c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time3?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time3c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time3?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 3 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 4  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time4c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time4?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time4c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time4?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 4 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 5  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time5c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time5?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time5c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time5?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 5 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 6  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time6c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time6?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time6c?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time6?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 6 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 7 **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time7c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time7?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time7c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time7?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 7-************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 7 **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time71c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time71?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time71c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time71?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 7-************************************************************************************************************************************************-->
</div>

 <!-- 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //
      //                                                 Evening
      //
      // 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     -->
<div class="col-md-6">
<!--********************************************* Start PHP TIME 8  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time8c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time8?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time8c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time8?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 8 -************************************************************************************************************************************************-->
<!--********************************************* Start PHP TIME 9  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time9c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time9?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time9c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time9?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 9 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 10  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time10c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time10?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time10c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time10?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 10 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 11  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time11c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time11?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time11c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time11?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 11 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 12  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time12c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time12?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time12c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time12?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 12 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 13  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time13c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time13?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time13c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time13?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 13 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 14  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time14c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time14?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time14c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time14?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 14 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 15  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time15c'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time15?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time15c ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time15?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 3 -************************************************************************************************************************************************-->

</div>

          <button style="margin-top: 30px;" class="btn btn-outline-primary btn-block" name="rdvpatient" type="submit">Make An Appointment</button>
        
</form>
<?php } } ?>
</div>

<!-- 
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                     
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 -->
 <div style="margin-top: 50px;" class="container">
<?php $sql = "SELECT * FROM `rendez_vous` WHERE `objt_rdv` = '$objt_rdv' AND `objt_rdv` = 'Medical analysis laboratory'";
        $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) { ?>
<form action="" method="POST" class="row g-3 needs-validation" >
<input type="hidden" name="id_sec" value="<?php echo $ID_sec; ?>">
     <input type="hidden" name="id_sec" value="<?php echo $ID_sec; ?>">
    <input type="hidden" name="ID_pat" value="<?php echo $ID_pat; ?>">
    <input type="hidden" name="objet_rdv" value="<?php echo $objt_rdv; ?>">
    <input type="hidden" name="date_day" value="<?php echo $date_today; ?>">

  <div class="note">
     <strong>Note:</strong>
     The Frame in <span class="text-success">green</span>,The time is availble to everyone, But the <span class="text-danger" >red</span> frame has been reserved
    </div>
  <div class="row">
    <!-- 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //
      //                                                 Moorning
      //
      // 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     -->
<div class="col-md-6">
<!--********************************************* Start PHP TIME 3  **************************************************************************************************************************************************-->
        <?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time1d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" ><?php echo $time1?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time1d ?>" checked>
                   <label class="form-check-label" ><?php echo $time1?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 1 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 2  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time2d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time2?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time2d ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time2?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 2 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 3  **************************************************************************************************************************************************--->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time3d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time3?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time3d ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time3?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 3 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 4  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time4d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time4?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time4d ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time4?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 4 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 5  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time5d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time5?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time5d ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time5?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 5 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 6  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time6d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time6?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time6d?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time6?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 6 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 7 **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time7d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time7?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time7d?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time7?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 7-************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 7 **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time71d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time71?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time71d ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time71?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 7-************************************************************************************************************************************************-->
</div>

 <!-- 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //
      //                                                 Evening
      //
      // 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     -->
<div class="col-md-6">
<!--********************************************* Start PHP TIME 8  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time8d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time8?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time8d ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time8?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 8 -************************************************************************************************************************************************-->
<!--********************************************* Start PHP TIME 9  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time9d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time9?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time9d ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time9?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 9 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 10  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time10d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time10?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time10d ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time10?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 10 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 11  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time11d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time11?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time11d ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time11?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 11 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 12  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time12d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time12?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time12d ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time12?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 12 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 13  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time13d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time13?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time13d ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time13?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 13 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 14  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time14d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time14?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time14d ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time14?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 14 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 15  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time15d'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time15?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time15d ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time15?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 3 -************************************************************************************************************************************************-->

</div>

          <button style="margin-top: 30px;" class="btn btn-outline-primary btn-block" name="rdvpatient" type="submit">Make An Appointment</button>
        
</form>
<?php } } ?>
</div>

<!-- 
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                     
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 -->
 <div style="margin-top: 50px;" class="container">
<?php $sql = "SELECT * FROM `rendez_vous` WHERE `objt_rdv` = '$objt_rdv' AND `objt_rdv` = 'Dental Surgery'";
        $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) { ?>
<form action="" method="POST" class="row g-3 needs-validation" >
<input type="hidden" name="id_sec" value="<?php echo $ID_sec; ?>">
<input type="hidden" name="id_sec" value="<?php echo $ID_sec; ?>">
    <input type="hidden" name="ID_pat" value="<?php echo $ID_pat; ?>">
    <input type="hidden" name="objet_rdv" value="<?php echo $objt_rdv; ?>">
    <input type="hidden" name="date_day" value="<?php echo $date_today; ?>">

  <div class="note">
     <strong>Note:</strong>
     The Frame in <span class="text-success">green</span>,The time is availble to everyone, But the <span class="text-danger" >red</span> frame has been reserved
    </div>
  <div class="row">
    <!-- 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //
      //                                                 Moorning
      //
      // 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     -->
<div class="col-md-6">
<!--********************************************* Start PHP TIME 3  **************************************************************************************************************************************************-->
        <?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time1e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" ><?php echo $time1?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time1e ?>" checked>
                   <label class="form-check-label" ><?php echo $time1?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 1 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 2  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time2e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time2?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time2e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time2?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 2 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 3  **************************************************************************************************************************************************--->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time3e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time3?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time3e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time3?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 3 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 4  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time4e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time4?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time4e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time4?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 4 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 5  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time5e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time5?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time5e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time5?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 5 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 6  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time6e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time6?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time6e?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time6?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 6 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 7 **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time7e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time7?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time7e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time7?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 7-************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 7 **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time71e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time71?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time71e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time71?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 7-************************************************************************************************************************************************-->
</div>

 <!-- 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //
      //                                                 Evening
      //
      // 
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     -->
<div class="col-md-6">
<!--********************************************* Start PHP TIME 8  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time8e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time8?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time8e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time8?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 8 -************************************************************************************************************************************************-->
<!--********************************************* Start PHP TIME 9  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time9e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time9?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time9e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time9?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 9 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 10  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time10e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time10?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time10e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time10?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 10 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 11  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time11e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time11?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time11e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time11?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 11 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 12  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time12e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time12?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time12e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time12?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 12 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 13  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time13e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time13?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time13e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time13?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 13 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 14  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time14e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time14?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time14e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time14?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 14 -************************************************************************************************************************************************-->

<!--********************************************* Start PHP TIME 15  **************************************************************************************************************************************************-->
<?php
          $sql = "SELECT * FROM `rendez_vous` WHERE `date_rdv` = '$time15e'";
            $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {?>
            <!-- Disabled -->
            <div style="padding: 5px;" class="form-check  alert-danger">
                <input style="margin: 6px 10px;" class="form-check-input" type="radio"  disabled>
                <label class="form-check-label" for="exampleRadios1"><?php echo $time15?></label>
            </div>
            <?php } } else { ?>
               <!-- Kayena -->
               <div style="padding: 5px;" class="form-check  alert-success">
                   <input style="margin: 6px 10px;"  class="form-check-input" type="radio" name="timerdvpat" id="" value="<?php echo $time15e ?>" checked>
                   <label class="form-check-label" for="exampleRadios2"><?php echo $time15?></label>
               </div>
        <?php } ?>
<!--************************************************** END PHP TIME 3 -************************************************************************************************************************************************-->

</div>

          <button style="margin-top: 30px;" class="btn btn-outline-primary btn-block" name="rdvpatient" type="submit">Make An Appointment</button>
        
</form>
<?php } } ?>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
