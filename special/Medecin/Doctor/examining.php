<?php
// START SESSION
session_start();
if (isset($_SESSION["ID_med"]) && isset($_SESSION["nom_med"])  && isset($_SESSION["pre_med"])  && isset($_SESSION["email_med"])) {
  $id_med = $_SESSION["ID_med"];
}else{
  header('Location: Login/index/index_login.php');
  exit();
}

include_once "conn_db.php";
// include_once "Code PHP/include/examinig/index_examin.php";

if (isset($_GET["id_patient"]) && isset($_GET["id_app"]) ) {
  $id_patient = $_GET["id_patient"];
  $id_appo = $_GET["id_app"];
}else{
  $id_patient = 0;
}


?>
<a href=""></a>


<!doctype html>
<html lang="en">
  <head>
    <title>Examining | EL-AMEN</title>
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
    <link rel="stylesheet" href="css/style CSS/style.css">
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
  <!-- LEFT SIDEBAR NAVBAR-->
  <div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
      <nav>
        <ul class="nav">
          <li><a href="index.php" class=""><i class="fa fa-book"></i> <span>Appointment</span></a></li>
          <li><a href="examining.php?id_patient=<?php echo $id_patient; ?>&id_app=<?php echo $id_appo;?>" class="active"><i class="fa fa-plus-circle" aria-hidden="true"></i> <span>Examining</span></a></li>
          <li><a href="analyse.php?id_patient=<?php echo $id_patient;?>&id_app=<?php echo $id_appo;?>" class=""><i class="fa fa-flask" aria-hidden="true"></i><span>Analyse</span></a></li>
          <li><a href="scan.php?id_patient=<?php echo $id_patient; ?>&id_app=<?php echo $id_appo;?>" class=""><i class="fa fa-heartbeat" aria-hidden="true"></i> <span>sacn</span></a></li>
          <li><a href="history.php?id_patient=<?php echo $id_patient;?>&id_app=<?php echo $id_appo;?>" class=""><i class="fa fa-history" aria-hidden="true"></i> <span>History Patient</span></a></li>
          <li><a href="reslt_analysis.php?id_patient=<?php echo $id_patient;?>&id_app=<?php echo $id_appo;?>" class=""><i class="fa fa-tint"></i> <span>Result Analyse</span></a></li>	
          <li><a href="reslt_scan.php?id_patient=<?php echo $id_patient;?>&id_app=<?php echo $id_appo;?>" class=""><i class="fa fa-inbox"></i> <span>Result Scan</span></a></li>
          <li><a href="other_app.php?id_patient=<?php echo $id_patient;?>&id_app=<?php echo $id_appo;?>" class=""><i class="fa fa-plus-circle"></i><span>Other Appointment</span></a></li>
        </ul>
      </nav>
    </div>
  </div>
<!-- END LEFT SIDEBAR NAVBAR -->
<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">

<!-- Start *** Patient HELLO -->
<div class="row">
	<div class="col-md-12">
    <div style="background-color: #fff;" class="jumbotron">
      <h1 class="display-4">Hello, Dr <?php echo $_SESSION["nom_med"]  ." ".$_SESSION["pre_med"] ?></h1>
        <p class="lead"> </p>
        <hr class="my-4">
<!-- Start Code PPH Select Info Pation -->
<?php   
// include_once "Code PHP/include/examinig/index_examin.php";

  $sql2 = "SELECT * FROM `patent` WHERE `ID_pat` = '$id_patient'";
  $result_pat = $conn->query($sql2);
    if ($result_pat->num_rows > 0) {
       while($row = $result_pat->fetch_assoc()) { 
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
  } else {
      echo "The Patient is not registered";
    }
?> 
      
    </div>
<!-- END Code PPH Select Info Pation -->     

<!-- stat Requst analyse or scan -->
<div style="background-color: #fff;" class="jumbotron">
    <form action="Code PHP/include/examinig/addmedicinie.php" method="POST">
    <div class="form-row">
              <div class="form-group col-md-4">
                <label style="font-family:  'Open Sans', sans-serif; font-weight: 400; font-size: 20px;">Name is Medicine</label>
                <input type="text" class="form-control input_style" name="namemedicine" placeholder="Enter Name Medicine" >
              </div>
              
              <div class="form-group col-md-1">
                <label style="font-family:  'Open Sans', sans-serif; font-weight: 400; font-size: 20px;">Quantity</label>
                <input type="text" class="form-control input_style"name="quantit"  placeholder="1000 G " >
              </div>
              <div class="form-group col-md-1">
                <label style="font-family:  'Open Sans', sans-serif; font-weight: 400; font-size: 20px;">Times</label>
                <input type="text" class="form-control input_style"name="times"  placeholder=" 3 Times " >
              </div>
              <div class="form-group col-md-4">
                <label style="font-family:  'Open Sans', sans-serif; font-weight: 400; font-size: 20px;">Type Medicine</label>
                <input type="text" class="form-control input_style"name="type_medi"  placeholder="Type Medicine " >
              </div>
          </div>
        <button style="margin-top: 32px;" type="submit" name="medicine" class="btn btn-primary btn-lg ">Add Medicine </button>

    </form>
  
</div>

<!-- END Requst analyse or scan -->

          <!-- Start Medical Examination ************* -->
<div class="panel">
	<div class="panel-heading">
		<h3 class="text-info">Medical Examination</h3><br>
		<h3 style="color: #000;  "  class="panel-title">Give a recipe for treatment</h3>
	</div>
  <?php //echo htmlspecialchars($_SERVER['PHP_SELF']); ?>
	<div class="panel-body">
  <form action="Code PHP/include/examinig/index_examin.php" method="POST">
      <input style="border: none; width:5px; color:#fff" type="text" name="id_patient"  value="<?php echo  $id_patient?>">
      <input style="border: none; width:5px; color:#fff" type="text" name="id_doctor"   value="<?php echo  $id_med?>">
      <input style="border: none; width:5px; color:#fff" type="text" name="age"   value="<?php echo  $age?>">
      <input style="border: none; width:5px; color:#fff" type="text" name="id_appo"   value="<?php echo  $id_appo?>">
         

<div class="row mb-6">
  <div class="col-sm-6 themed-grid-col">
    <h4>To Pharmaceutical</h4>
     <div>
      <div style="font-size: 18px;" class="checkbox">
<!-- Start Code PHP Select info analyse -->
<?php
$sql2 = "SELECT medicament.nom_medic,medicament.type_medic, posologie.quantite, posologie.posologie 
FROM medicament
INNER JOIN posologie ON medicament.id_medic = posologie.id_medic GROUP BY `nom_medic` ";
  $result_run = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result_run) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result_run)) {  
        
?>  
        <label><input type="checkbox" name="Pharmas[]" value="<?php echo $row["nom_medic"]."  ".$row["quantite"] ."  ".$row["posologie"] ." Times"?>  " class="form-check-input">
        <?php echo $row["nom_medic"]." _ ".$row["quantite"] ." _ ".$row["posologie"] ." Times";?></label><br>
<?php
    }
  } else {
    echo "0 results";
  }
 ?>
<!-- END Code PHP Select info analyse -->
         </div>
      </div>  
     </div>
 </div>
              
              <button type="submit" name="examination" class="btn btn-primary btn-lg btn-block">Examination</button>
          </form>
	</div>
</div>
          <!-- END Medical Examination *************** -->

<!-- stat Requst analyse or scan -->
<div style="background-color: #fff;" class="jumbotron">
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Request here</h1>
          <p class="lead mb-4">
            Request some medical tests or scans for your disease here.
          </p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="analyse.php?id_patient=<?php echo $id_patient; ?>"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Request Analyse</button></a>
            <a href="scan.php?id_patient=<?php echo $id_patient; ?>"><button type="button" class="btn btn-primary btn-lg px-4">Request scan</button></a>
          </div>
    </div>
  
</div>

<!-- END Requst analyse or scan -->
	</div>
</div>
				<!-- END *** Patient Appointments -->
    </div>
  </div>
  <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
</div>
    <!-- Javascript -->
	<script src="css/vendor/jquery/jquery.min.js"></script>
	<script src="css/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="css/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="css/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="css/vendor/chartist/js/chartist.min.js"></script>
	<script src="css/scripts/klorofil-common.js"></script>
	<script src="css/vendor/toastr/toastr.min.js"></script>
  <!-- Search -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <script src="script1.js"></script>
  <script src="script2.js"></script>

  </body>
</html>
