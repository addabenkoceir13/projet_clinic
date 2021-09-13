<?php
session_start();
if (isset($_SESSION["ID_med"]) && isset($_SESSION["nom_med"])  && isset($_SESSION["pre_med"])  && isset($_SESSION["email_med"])) {

    $id_med = $_SESSION["ID_med"];
  }else{
    header('Location: registation/login/index/index_login.php');
    exit();
  }
include_once "include/Adds/add_medicime.php";
?>

<a href="include/Adds/add_medicime.php"></a>

<!doctype html>
<html lang="en">

<head>
	<title> Add-ons | EL AMEN </title>
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
	<link rel="stylesheet" href="assets/style CSS/style.css">
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
					    <li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
						<li><a href="adddoctor.php" class=""><i class="fa fa-user-md"></i> <span>Add Doctor</span></a></li>	
						<li><a href="addsecretary.php" class=""><i class="fa fa-address-book-o"></i> <span>Add Secretary</span></a></li>					 
						<li><a href="patient.php" class=""><i class="fa fa-user-circle-o"></i> <span>Patient</span></a></li>
						<li><a href="tables.php" class=""><i class="lnr lnr-dice"></i> <span>Appointment</span></a></li>
						<li><a href="adda.php" class="active"><i class="fa fa-plus-square-o"></i> <span>Add-ons</span></a></li>
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
					<h3 class="page-title">Add-ons</h3>
					<div id="toastr-demo" class="panel">
						<!-- Start Body -->
						<div class="panel-body">
							<!-- CONTEXTUAL -->
							<h4>Addition of medicine</h4>
							<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
 								<div class="form-group">
 								 	 <div class="form-group col-md-5">
  								 	   <label for="inputEmail4">Name is medicine</label>
										  <input class="form-control input_style" name="medicine1" type="text" placeholder="Name is medicine" required>
  								 	 </div>
  								 	 <div class="form-group col-md-1">
  								 	   <label for="inputPassword4">Quantity</label>
								 		<input class="form-control input_style" name="quantity" type="number" placeholder=" g" required>
  								 	 </div>
									<div class="form-group col-md-1">
  								 	   <label for="inputPassword4">Times</label>
								 		<input class="form-control input_style" name="times" type="number" placeholder=" 3 times" required>
  								 	 </div>
									<div class="form-group col-md-5">
  								 	   <label for="inputPassword4">Medicine Type</label>
								 		<input class="form-control input_style" name="type" type="text" placeholder="Medicine Type " required>
  								 	 </div>

  								</div>
								<button type="submit" name="medicine" class="btn btn-success btn-toastr" data-context="success" data-message="Add Medicine" data-position="top-right">Add Medicine</button>
 							</form>
						</div>
						<!-- End Body -->
					</div>
				</div>
				<!-- End -->
				<div class="container-fluid">
					<div id="toastr-demo" class="panel">
						<!-- Start Body -->
						<div class="panel-body">
							<!-- CONTEXTUAL -->
							<h4>Medical tests</h4>
							<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
 								<div class="form-group">
 								 	 <div class="form-group col-md-6">
  								 	   <label for="inputEmail4">Name is Analysis</label>
										  <input class="form-control input_style" name="analysis1" type="text" placeholder="Name is Analysis" required>
  								 	 </div>
  								 	 <div class="form-group col-md-6">
  								 	   <label for="inputPassword4">Confirm the Name is Analysis</label>
								 		<input class="form-control input_style" name="analysis2" type="text" placeholder="Confirm..." required>
  								 	 </div>
  								 	</div>
									   <button type="submit" name="analysis" class="btn btn-success btn-toastr" data-context="success" data-message="Add Analysis" data-position="top-right">Add Analysis</button>
 							</form>
						</div>
						<!-- End Body -->
				    </div>
				</div>
				<!-- End -->


				<div class="container-fluid">
						<!-- Start Body -->
					<div id="toastr-demo" class="panel">
						 <div class="panel-body">
							<!-- CONTEXTUAL -->
							<h4>Medical Scans</h4>
							<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
 								<div class="form-group">
 								 	 <div class="form-group col-md-6">
  								 	   <label for="inputEmail4">Name is Scan</label>
										  <input class="form-control input_style" name="scan1" type="text" placeholder="Name is Scan" required>
  								 	 </div>
  								 	 <div class="form-group col-md-6">
  								 	   <label for="inputPassword4">Confirm the Name is Scan</label>
								 		<input class="form-control input_style" name="scan2" type="text" placeholder="Confirm..." required>
  								 	 </div>
  								 	</div>
								<button type="submit" name="scan" class="btn btn-success btn-toastr" data-context="success" data-message="Add Scans" data-position="top-right">Add Scans</button>
 							</form>
						</div>
						<!-- End Body -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
			<div class="container-fluid">
					<div id="toastr-demo" class="panel">
						<!-- Start Body -->
						<div class="panel-body">
							<!-- CONTEXTUAL -->
							<h4>Services</h4>
							<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
 								<div class="form-group">
									 <input style="display: none;" type="text" name="id_dot" value="<?php echo $id_med ?>">
 								 	 <div class="form-group col-md-12">
  								 	   <label for="inputEmail4">Name is Services</label>
										  <input class="form-control input_style" name="services1" type="text" placeholder="Name is Services" required>
  								 	 </div>
									   <button type="submit" name="services" class="btn btn-success btn-toastr" data-context="success" data-message="Add Analysis" data-position="top-right">Add Analysis</button>
 							</form>
						</div>
						<!-- End Body -->
				    </div>
				</div>
				<!-- End -->
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/toastr/toastr.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
