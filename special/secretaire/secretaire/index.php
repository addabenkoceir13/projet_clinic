<?php 
session_start();
if ( isset($_SESSION["email"]) && isset($_SESSION['pre_sec']) && isset($_SESSION['nom_sec']) && isset($_SESSION['ID_sec'])) { 
    $_SESSION['ID_sec'];
}
else{
	header('Location: ../registation/login/index/index_login.php');
	exit();
}
$id_sec = $_SESSION['ID_sec'];

$date_today = date("Y-m-d");
?>
<!doctype html>
<html lang="en">

<head>
	<title>Appointment | EL-AMEN</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="Logo Alaman.png" sizes="76x76" href="../photo/Logo Alaman.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../photo/Logo Alaman.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
			  <a href="index.php"><img style="width: 200px; " src="../photo/top_head_layout.png" alt=" Logo" class="logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<!-- profi Admin ******* -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../photo/Logo Alaman.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['pre_sec'] ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="page-profile.php"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="message.php"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="../include/logout/logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
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
						<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Appointment</span></a></li>
						<li><a href="appointment.php" class=""><i class="fa fa-plus-circle" aria-hidden="true"></i> <span>Add Appointment</span></a></li>
						<li><a href="editApp.php" class=""><i class="fa fa-pencil" aria-hidden="true"></i><span>Edit</span></a></li>
						<li><a href="delete.php" class=""><i class="fa fa-trash" aria-hidden="true"></i> <span>Delete</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.php" class="">Profile</a></li>
									<li><a href="message.php" class="">Message</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.php" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>	
						<li><a href="search.php" class=""><i class="fa fa-search"></i> <span>Search</span></a></li>

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
<a href="../include/appointement/confirmed.php"></a>
				<!-- Start *** Hello Sec -->
					<div class="jumbotron" style="background: #fff;">
						<h1 class="display-4">Hello, <?php echo $_SESSION['nom_sec']." ".$_SESSION['pre_sec']?></h1>
						<p class="lead"> Have a nice day, here is the list of patients scheduled for the day.</p>
						<hr class="my-4">
						<p class="display-4" style="color: #000;">Please enter an appointment date</p>
						    <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
								<div class="form-group ">
								 	<input type="date" class="form-control form-control-lg" name="date_app" value="<?php echo $date_today  ;?>" placeholder="Date">
								</div>
								<button type="submit" class="btn btn-primary mb-2">Show Appointment</button>
								<input style="width: 1px; color:#fff; border: none;" type="text" name="id_sec" value="<?php echo $id_sec;?>">
						  </form>
						 
					</div>
				<!-- END *** Hello Sec -->

				<!-- Start *** Patient Appointments Cardoyloge -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="text-info">Patient Appointments</h3><br>
									<h3 class="panel-title">Special cardiology schedule</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<?php include_once "../include/appointement/index_appCar.php";?>
	
								</div>
							</div>
						</div>
					</div>
				<!-- END *** Patient Appointments -->

				<!-- Start *** Patient Appointments Cardoyloge -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="text-info">Patient Appointments</h3><br>
								<h3 class="panel-title">Radiology Specialized Medical imaging</h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
								</div>
							</div>
							<div class="panel-body">
							<?php include_once "../include/appointement/index_appRim.php";?>
								
							</div>
						</div>
					</div>
				</div>
			<!-- END *** Patient Appointments -->

			<!-- Start *** Patient Appointments Cardoyloge -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="text-info">Patient Appointments</h3><br>
							<h3 class="panel-title">Vascular Medicine and Call Vascular</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body">
						<?php include_once "../include/appointement/index_appMvsv.php";?>
							
						</div>
					</div>
				</div>
			</div>
			<!-- END *** Patient Appointments -->

			<!-- Start *** Patient Appointments Cardoyloge -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="text-info">Patient Appointments</h3><br>
							<h3 class="panel-title">Emergency Intensive Care</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body">
						<?php include_once "../include/appointement/index_appUsi.php";?>

						</div>
					</div>
				</div>
			</div>
			<!-- END *** Patient Appointments -->

			<!-- Start *** Patient Appointments Cardoyloge -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="text-info">Patient Appointments</h3><br>
							<h3 class="panel-title">Medical analysis laboratory</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body">
						<?php include_once "../include/appointement/index_appLdm.php";?>

						</div>
					</div>
				</div>
			</div>
			<!-- END *** Patient Appointments -->

			<!-- Start *** Patient Appointments Cardoyloge -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="text-info">Patient Appointments</h3><br>
							<h3 class="panel-title">Dental Surgery</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body">
						<?php include_once "../include/appointement/index_appCd.php";?>

						</div>
					</div>
				</div>
			</div>
			<!-- END *** Patient Appointments -->
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script src="assets/vendor/toastr/toastr.min.js"></script>


	<a href="../include/appointement/index_appCar.php"></a>
</body>

</html>
