<?php
session_start();
if (isset($_SESSION["ID_med"]) && isset($_SESSION["nom_med"])  && isset($_SESSION["pre_med"])  && isset($_SESSION["email_med"])) {
  $id_med = $_SESSION["ID_med"];
}else{
  header('Location: Login/index/index_login.php');
  exit();
}
include_once "conn_db.php";

 // Start Slect ID Pation For method GET 
 if (isset($_GET["id_patient"]) && isset($_GET["id_app"]) ) {
  $id_patient = $_GET["id_patient"];
  $id_appo = $_GET["id_app"];
}else{
  $id_patient = 0;
}
// END method GET

?>

<!doctype html>
<html lang="en">
  <head>
    <title> History Patient | EL-AMEN</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="css/css/">
    <link rel="stylesheet" href="css/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/vendor/linearicons/style.css">
    <link rel="stylesheet" href="css/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="css/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="Logo Alaman.png" sizes="76x76" href="photo/Logo Alaman.png">
    <link rel="icon" type="image/png" sizes="96x96" href="photo/Logo Alaman.png">
  </head>
  <body>

<div id="wrapper">
  <!-- Start NAVBAR TOP-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
       <a href="index.php"><img style="width: 200px; " src="photo/top_head_layout.png" alt=" Logo" class="logo"></a>
    </div>
    <div class="container-fluid">
      <div class="navbar-btn">
        <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
      </div>
      
      <div id="navbar-menu">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <!-- <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">Mohames</a> -->
            
          </li>
          <!-- profi Admin ******* -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="photo/Logo Alaman.png" class="img-circle" alt="Logo"> <span><?php echo $_SESSION["nom_med"];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="index.php"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
              <li><a href="message.php"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
              <li><a href="Code PHP/include/logout/logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- END NAVBAR TOP--> 
</span>
  <!-- LEFT SIDEBAR NAVBAR-->
<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
      <nav>
      <ul class="nav">
          <li><a href="index.php" class=""><i class="fa fa-book"></i> <span>Appointment</span></a></li>
          <li><a href="examining.php?id_patient=<?php echo $id_patient; ?>&id_app=<?php echo $id_appo;?>" class=""><i class="fa fa-plus-circle" aria-hidden="true"></i> <span>Examining</span></a></li>
          <li><a href="analyse.php?id_patient=<?php echo $id_patient;?>&id_app=<?php echo $id_appo;?>" class=""><i class="fa fa-flask" aria-hidden="true"></i><span>Analyse</span></a></li>
          <li><a href="scan.php?id_patient=<?php echo $id_patient; ?>&id_app=<?php echo $id_appo;?>" class=""><i class="fa fa-heartbeat" aria-hidden="true"></i> <span>sacn</span></a></li>
          <li><a href="history.php?id_patient=<?php echo $id_patient;?>&id_app=<?php echo $id_appo;?>" class=""><i class="fa fa-history" aria-hidden="true"></i> <span>History Patient</span></a></li>
          <li><a href="reslt_analysis.php?id_patient=<?php echo $id_patient;?>&id_app=<?php echo $id_appo;?>" class=""><i class="fa fa-tint"></i> <span>Result Analyse</span></a></li>	
          <li><a href="reslt_scan.php?id_patient=<?php echo $id_patient;?>&id_app=<?php echo $id_appo;?>" class="active"><i class="fa fa-inbox"></i> <span>Result Scan</span></a></li>
          <li><a href="other_app.php?id_patient=<?php echo $id_patient;?>&id_app=<?php echo $id_appo;?>" class=""><i class="fa fa-plus-circle"></i><span>Other Appointment</span></a></li>

        </ul>
     </nav>
  </div>
<!-- END LEFT SIDEBAR NAVBAR -->
</div>

<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <!-- Start *** PatientHELLO -->
<div class="row">
	<div class="col-md-12">
        <div style="background-color: #fff;" class="jumbotron">
            <h1 class="display-4">Hello, Dr <?php echo $_SESSION["nom_med"]  ." ".$_SESSION["pre_med"] ?></h1>
            <p class="lead"></p>
            <hr class="my-4">
            <?php 
           
            $fname = $lname = '';
                $sql = "SELECT * FROM `patent` WHERE `ID_pat` = '$id_patient'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                        $fname =  $row["nom_pat"] ;
                        $lname =  $row["pre_pat"] ;
                         //  Calcule Age patient
                          $dob = $row["date_niss_pat"];   
                          $age = date_diff(date_create($dob), date_create('today'))->y;             
            ?>
                <div class="row mb-4">
                <div class="col-sm-3 themed-grid-col"><strong>ID =       </strong> <?php echo $id_patient; ?> </div>
                <div class="col-sm-3 themed-grid-col"><strong>First Name:</strong> <?php echo $row["nom_pat"]; ?></div>
                <div class="col-sm-3 themed-grid-col"><strong>Last Name: </strong> <?php echo $row["pre_pat"];?></div>
                <div class="col-sm-3 themed-grid-col"><strong>Your Age:  </strong> <?php echo $age; ?></div>
              </div>
              <?php
              
            }
            } else {echo '<div class="alert alert-danger alert-dismissible" role="alert">Sorry </div';}
          ?>
        </div>
          <!-- END *************** -->
          <!-- Start scan ************* -->
          <div class="panel">
			<div class="panel-body">
                <!-- Start Fulle Name patient -->
        <div class="px-4 py-5 my-5 text-center">
          <h1 class="display-5 fw-bold text-primary">History Patient <?php echo $fname ." " .$lname; ?></h1>
          <p class="lead mb-4"> </p>
        </div>
               <!-- Start Fulle Name patient -->

<!-- Start History Analyse -->
<h3 class="text-primary">History scan</h3><br>
   <table class="table table-striped">
        <thead>
           <tr class="info">
             <th>ID Scans</th>
             <th>ID Consultaion</th>
             <th>Name File Scans</th>
             <th>Date </th>
             <th>View</th>
           </tr>
        </thead>
        <tbody>
    <!-- Start PHP **** -->
        <?php
	          $query2 = "SELECT resultab.id,resultab.id_cons,resultab.result_scan, resultab.date ,ordonnance.nom_pat,ordonnance.pre_pat,ordonnance.id_cons
             FROM resultab 
             INNER JOIN ordonnance ON resultab.id_cons = ordonnance.id_cons WHERE nom_pat = '$fname' AND pre_pat = '$lname'";
	          $result2 = mysqli_query($conn, $query2);
	             if(mysqli_num_rows($result2) > 0){


	          	  while($row = mysqli_fetch_assoc($result2)){
	          	echo "<tr>".
                    "<td>". $row["id"]  ."</td>".
                    "<td>". $row["id_cons"]  ."</td>".
                    "<td>". $row["result_scan"]  ."</td>".
                    "<td>". $row["date"]."</td>".
                    "<td>";?><a target='_blank' href='conf_scan.php?id_analyse=<?php echo $row["id"] ; ?>'>View</a></td>
              <?php '</tr>';
	          					  }
                }else {echo '<div class="alert alert-danger alert-dismissible" role="alert">there is no history for this patient</div>' ;}
					?>
    </tbody>
   </table>  
<!-- END History Analyse -->
<br>

	</div>
</div>
				<!-- END *** Patient Appointments -->
    </div>
  </div>
  <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->



 


    <!-- Javascript -->
	<script src="css/vendor/jquery/jquery.min.js"></script>
	<script src="css/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="css/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="css/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="css/vendor/chartist/js/chartist.min.js"></script>
	<script src="css/scripts/klorofil-common.js"></script>
	<script src="css/vendor/toastr/toastr.min.js"></script>

  </body>
</html>