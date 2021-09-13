<?php
session_start();
if (isset($_SESSION["ID_sec"]) && isset($_SESSION["nom_sec"])  && isset($_SESSION["pre_sec"])  && isset($_SESSION["email"])) {
	$id_sec = $_SESSION["ID_sec"];
  }else{
	header('Location: Login/index/index_login.php');
	exit();
  }
include "include/conn_db.php";
?>

<!doctype html>
<html lang="en">

<head>
	<title>Scan	</title>
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="photo/Logo Alaman.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION["nom_sec"];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="page-profile.php"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="Login/logout/logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
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
						<li><a href="index.php" class="active"><i class="fa fa-heart-o"></i> <span>Scans</span></a></li>
						<li><a href="result.php" class=""><i class="fa fa-envelope-o"></i> <span>Sacns Result</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.php" class="">Profile</a></li>
								
								</ul>
							</div>
						</li>
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
					 <!-- START HELLO -->
					 <div style="background-color: rgb(255, 255, 252);" class="jumbotron jumbotron-fluid">
        				<div class="container">
        				  <h1 class="display-4">Hello  <?php echo $_SESSION["nom_sec"]  ." ".$_SESSION["pre_sec"] ?> </h1>
						  <hr class="my-4">
						   <p class="display-4" style="color: #000;">Please enter an appointment date</p>
						    <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
								<div class="form-group ">
								 	<input type="date" class="form-control form-control-lg" name="date_app"  placeholder="Date">
								</div>
								<button type="submit" name="Date" class="btn btn-primary mb-2">Show Appointment</button>
						  </form>
        				</div>
      				</div>
      <!-- END HELLO -->
					<div class="row">
						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<div class="px-4 py-5 my-5 text-center">
										<h1 style="color: #0066ff;"><i class="fa fa-heart-o" ></i>Scans</h1>
									</div>
									<h3 style="color: #005fff;"><i style="margin-right: 10px; font-size: 20px;" class="fa fa-list-ul" ></i>Liste Of Scans</h3>
									<table class="table table-striped">
										<thead>
										  <tr class="info">
										    <th>ID Consultation</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Scans</th>
											<th>Date Scans</th>
											<th>Name Clinic</th>
										  </tr>
										</thead>
										<tbody>
										<?php 

												$date_res = '';
												$date_res = date("Y/m/d");
												 if (isset($_POST["Date"])) {
													$date_res = $_POST["date_app"];
												}
											 $query = "SELECT * FROM `ordonnance` WHERE `date` = '$date_res' AND `group_id` = 3";
											 $result = mysqli_query($conn, $query);
											 if(mysqli_num_rows($result) > 0){
												 while($row = mysqli_fetch_assoc($result)){
														  echo 
														  "<td>". $row["id_cons"]  ."</td>".
														  "<td>". $row["nom_pat"]  ."</td>".
														  "<td>". $row["pre_pat"]   ."</td>".
											  			  "<td>". $row["treatement"]."</td>".
														  "<td>". $row["date"]."</td>".
														  "<td>". $row["lname_clinic"]."</td>".
											              "<td>"."</tr>";
												 }
											} else { echo '<div class="alert alert-danger alert-dismissible" role="alert"> <i class="fa fa-times-circle"></i> There are no patients in this service.</div>';}
										?>
									</tbody>
									</table>
								
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
						
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>

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
