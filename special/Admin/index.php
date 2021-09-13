<?php
session_start();
if (isset($_SESSION["ID_med"]) && isset($_SESSION["nom_med"])  && isset($_SESSION["pre_med"])  && isset($_SESSION["email_med"])) {
    $id_med = $_SESSION["ID_med"];
  }else{
    header('Location: registation/login/index/index_login.php');
    exit();
  }
?>
<?php
include_once "include/conn_db.php";

  				///////////////////////////////////////
  				// 								 	 //
				//  Number of registered patient 	 //
				// 									 //
				// ////////////////////////////////////

$query = "SELECT ID_pat FROM `patent` ORDER BY ID_pat ";
  $result = mysqli_query($conn, $query);
     $row =  mysqli_num_rows($result);

                ///////////////////////////////////////
  				// 								 	 //
				//  Number of Appointment       	 //
				// 									 //
				// ////////////////////////////////////
$query2 = "SELECT ID_RDv FROM `rendez_vous` ORDER BY ID_RDv ";
$result2 = mysqli_query($conn, $query2);
   $app =  mysqli_num_rows($result2);

                ///////////////////////////////////////
  				// 								 	 //
				//  Number of Doctor       	         //
				// 									 //
				// ////////////////////////////////////
$query3 = "SELECT ID_med FROM `medecin` ORDER BY ID_med ";
$result3 = mysqli_query($conn, $query3);
   $med =  mysqli_num_rows($result3);

                ///////////////////////////////////////
  				// 								 	 //
				//  Number of Secretary       	     //
				// 									 //
				// ////////////////////////////////////
$query3 = "SELECT ID_sec FROM `secretaire` ORDER BY ID_sec ";
$result3 = mysqli_query($conn, $query3);
   $sec =  mysqli_num_rows($result3);


                ///////////////////////////////////////
  				// 								 	 //
				//  Number of Consultation       	 //
				// 									 //
				// ////////////////////////////////////
$query3 = "SELECT id_cons FROM `consultaion` ORDER BY id_cons ";
$result3 = mysqli_query($conn, $query3);
   $cons =  mysqli_num_rows($result3);

   
                ///////////////////////////////////////
  				// 								 	 //
				//  Number of Analysis           	 //
				// 									 //
				// ////////////////////////////////////
$query3 = "SELECT Id_ana FROM `analyse` ORDER BY Id_ana ";
$result3 = mysqli_query($conn, $query3);
   $ana =  mysqli_num_rows($result3);

                ///////////////////////////////////////
  				// 								 	 //
				//  Number of Scans           	     //
				// 									 //
				// ////////////////////////////////////
$query3 = "SELECT id_radio FROM `radio` ORDER BY id_radio ";
$result3 = mysqli_query($conn, $query3);
   $sac =  mysqli_num_rows($result3);

                ///////////////////////////////////////
  				// 								 	 //
				//  Number of service                //
				// 									 //
				// ////////////////////////////////////
$query3 = "SELECT ID_srv FROM `service` ORDER BY ID_srv ";
$result3 = mysqli_query($conn, $query3);
   $srv =  mysqli_num_rows($result3);

   
                ///////////////////////////////////////
  				// 								 	 //
				//  Number of service                //
				// 									 //
				// ////////////////////////////////////
$query3 = "SELECT id_ord FROM `ordonnance` ORDER BY id_ord ";
$result3 = mysqli_query($conn, $query3);
   $ord =  mysqli_num_rows($result3);


                ///////////////////////////////////////
  				// 								 	 //
				//  Number of Cardiology             //
				// 									 //
				// ////////////////////////////////////
$query3 = "SELECT `ID_RDv` , `objt_rdv` FROM `rendez_vous`WHERE `objt_rdv` =  'Cardiology' ORDER BY `ID_RDv`  ";
$result3 = mysqli_query($conn, $query3);
   $card =  mysqli_num_rows($result3);

                ///////////////////////////////////////
  				// 								 	 //
				//  Number of Dental Surgery         //
				// 									 //
				// ////////////////////////////////////
$query3 = "SELECT `ID_RDv` , `objt_rdv` FROM `rendez_vous`WHERE `objt_rdv` =  'Dental Surgery' ORDER BY `ID_RDv`  ";
$result3 = mysqli_query($conn, $query3);
   $DS =  mysqli_num_rows($result3);

				///////////////////////////////////////
  				// 								 	 //
				//  Number of Laboratory             //
				// 									 //
				// ////////////////////////////////////
$query3 = "SELECT `ID_RDv` , `objt_rdv` FROM `rendez_vous`WHERE `objt_rdv` = 'Medical analysis laboratory' ORDER BY `ID_RDv`  ";
$result3 = mysqli_query($conn, $query3);
   $labo =  mysqli_num_rows($result3);

                ///////////////////////////////////////
  				// 								 	 //
				//  Number of Radiology             //
				// 									 //
				// ////////////////////////////////////
$query3 = "SELECT `ID_RDv` , `objt_rdv` FROM `rendez_vous`WHERE `objt_rdv` =  'Radiology Specialized Medical imaging' ORDER BY `ID_RDv`  ";
$result3 = mysqli_query($conn, $query3);
   $eadi =  mysqli_num_rows($result3);

                ///////////////////////////////////////
  				//								 	 //
				//  Number of Emergency              //
				// 									 //
				// ////////////////////////////////////
$query3 = "SELECT `ID_RDv` , `objt_rdv` FROM `rendez_vous`WHERE `objt_rdv` =  'Emergency Intensive Care' ORDER BY `ID_RDv`  ";
$result3 = mysqli_query($conn, $query3);
   $eic =  mysqli_num_rows($result3);

                ///////////////////////////////////////
  				// 								 	 //
				//  Number of Visitors              //
				// 									 //
				// ////////////////////////////////////
$query3 = "SELECT `ID_RDv` , `objt_rdv` FROM `rendez_vous`WHERE `objt_rdv` =  'Cardiology' ORDER BY `ID_RDv`  ";
$result3 = mysqli_query($conn, $query3);
   $Visitors =  mysqli_num_rows($result3);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Home Admin | EL AMEN </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="Logo Alaman.png" sizes="76x76" href="photo/Logo Alaman.png">
	<link rel="icon" type="image/png" sizes="96x96" href="photo/Logo Alaman.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
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
						<!-- profi Admin ******* -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="photo/Logo Alaman.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['nom_med'] ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="page-profile.php"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="message.php"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="include/logout/logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
					    <li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
						<li><a href="adddoctor.php" class=""><i class="fa fa-user-md"></i> <span>Add Doctor</span></a></li>	
						<li><a href="addsecretary.php" class=""><i class="fa fa-address-book-o"></i> <span>Add Secretary</span></a></li>					 
						<li><a href="patient.php" class=""><i class="fa fa-user-circle-o"></i> <span>Patient</span></a></li>
						<li><a href="tables.php" class=""><i class="lnr lnr-dice"></i> <span>Appointment</span></a></li>
						<li><a href="adda.php" class=""><i class="fa fa-plus-square-o"></i> <span>Add-ons</span></a></li>
						<li><a href="medical.php" class=""><i class="fa fa-stethoscope"></i> <span>List Medicale</span></a></li>
						<li><a href="page-profile.php" class=""><i class="fa fa-user"></i> <span>Profile</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Statistics</h3>
							<p style="color: #009;" ><?php echo "Today is " . date("l") ." ".date("d/m/y"); ?></p>
						</div>
						<div class="panel-body">
							<div id="toastr-demo" class="panel"></div>

							<div class="row">
								<div class="col-md-3">
									<div class="metric"  >
										<span class="icon"><i class="fa fa-users"></i></span>
										<p>
											<span class="title">Number of registered patient</span>
											<span class="number"><?php echo  $row;?> </span>
										</p>
									</div>
								</div>
								<div  class="col-md-3">
									<div style="height: 15vh;" class="metric">
										<span class="icon"><i class="fa fa-check-circle"></i></span>
										<p>
											<span class="title">Number of Appointment</span>
											<span class="number"><?php echo  $app;?></span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div style="height: 15vh;" class="metric">
										<span class="icon"><i class="fa fa-user-md"></i></span>
										<p>
											<span class="title">Numbre of Doctors</span>
											<span class="number"><?php echo  $med;?></span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div style="height: 15vh;" class="metric">
										<span class="icon"><i class="fa fa-users"></i></span>
										<p>
											<span class="title">Numbre of Secretary</span>
											<span class="number"><?php echo  $sec;?></span>
										</p>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-check-circle"></i></span>
										<p>
											<span class="title">Number of Consultation</span>
											<span class="number"><?php echo  $cons;?> </span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-flask"></i></span>
										<p>
											<span class="title">Number of Analysis</span>
											<span class="number"><?php echo  $ana;?></span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-heartbeat"></i></span>
										<p>
											<span class="title">Numbre of Scans</span>
											<span class="number"><?php echo  $sac;?></span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-check-circle"></i></span>
										<p>
											<span class="title">Numbre of Service</span>
											<span class="number"><?php echo  $srv;?></span>
										</p>
									</div>
								</div>
							</div>
								<!-- THERE ********** -->

							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-heart"></i></span>
										<p>
											<span class="title">Number of patient registered With Cardiology</span>
											<span class="number"><?php echo  $card;?> </span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-medkit"></i></span>
										<p>
											<span class="title">Number of patient registered With Dental Surgery</span>
											<span class="number"><?php echo  $DS;?></span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-flask"></i></span>
										<p>
											<span class="title">Number of patient registered With  analysis Laboratory</span>
											<span class="number"><?php echo  $labo;?></span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-heart"></i></span>
										<p>
											<span class="title">Number of patient registered With Radiology Specialized </span>
											<span class="number"><?php echo  $eadi;?></span>
										</p>
									</div>
								</div>
							</div>
							<!-- FOR ***************** -->
							<div class="row">
								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-heart"></i></span>
										<p>
											<span class="title">Number of patient registered With Emergency Intensive Care</span>
											<span class="number"><?php echo  $eic;?> </span>
										</p>
									</div>
								</div>
								
								<div class="col-md-4">
									<div style="height: 15vh;" class="metric">
										<span class="icon"><i class="fa fa-stethoscope"></i></span>
										<p>
											<span class="title">Numbre Prescription</span>
											<span class="number"><?php echo  $ord;?></span>
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div style="height: 15vh;" class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="title">Numbre Prescription</span>
											<span class="number"><?php echo  $ord;?></span>
										</p>
									</div>
								</div>
								
							</div>
							
							
						</div>
				    </div>
					<!-- END -->
			<!-- END MAIN CONTENT -->
	            </div>
			</div>
		</div>

	
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>

</body>
</html>
