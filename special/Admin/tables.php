
<?php
session_start();
if (isset($_SESSION["ID_med"]) && isset($_SESSION["nom_med"])  && isset($_SESSION["pre_med"])  && isset($_SESSION["email_med"])) {
    $id_med = $_SESSION["ID_med"];
  }else{
    header('Location: registation/login/index/index_login.php');
    exit();
  }
 include_once "include/conn_db.php";
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
						<li><a href="tables.php" class="active"><i class="lnr lnr-dice"></i> <span>Appointment</span></a></li>
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
					<h3 class="page-title">Tables</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Cardiology</h3>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr class="active">
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Birthday</th>
												<th>Phone</th>
												<th>Date Appointment </th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$i=1;
											 $query = "SELECT patent.ID_pat,patent.pre_pat, patent.nom_pat,patent.date_niss_pat,rendez_vous.objt_rdv, rendez_vous.date_rdv,rendez_vous.date_rdv2,patent.tel_pat
											 FROM patent
											 INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE `objt_rdv` = 'Cardiology' ";
											 $result = mysqli_query($conn, $query);
											
											if(mysqli_num_rows($result) > 0){
												 while($row = mysqli_fetch_assoc($result)){
														  echo 
														  '<th> '.$i++ ."</th>".
														  "<td>". $row["pre_pat"]."</td>".
														  "<td>". $row["nom_pat"]."</td>".
														  "<td>". $row["date_niss_pat"]."</td>".
														  "<td>". $row["tel_pat"]."</td>".
														  "<td>". $row["date_rdv"]."</td>".
														  "</tr>";
												  }
											}
											 else {
												  echo '<div class="alert alert-danger alert-dismissible" role="alert">
												  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												  <i class="fa fa-times-circle"></i> There are no patients in this service.
												  </div>';   }
											?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>
						<div class="col-md-12">
							<!-- TABLE NO PADDING -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Radiology Specialized Medical imaging</h3>
								</div>
								<div class="panel-body no-padding">
								<table class="table">
										<thead>
											<tr class="active">
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Birthday</th>
												<th>Phone</th>
												<th>Date Appointment </th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$i=1;
											 $query = "SELECT  patent.ID_pat,patent.pre_pat, patent.nom_pat,patent.date_niss_pat,rendez_vous.objt_rdv, rendez_vous.date_rdv,rendez_vous.date_rdv2,patent.tel_pat
											 FROM patent
											 INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE `objt_rdv` = 'Radiology Specialized Medical imaging' ";
											 $result = mysqli_query($conn, $query);
											
											if(mysqli_num_rows($result) > 0){
												 while($row = mysqli_fetch_assoc($result)){
														  echo 
														  '<th> '.$i++ ."</th>".
														  "<td>". $row["pre_pat"]."</td>".
														  "<td>". $row["nom_pat"]."</td>".
														  "<td>". $row["date_niss_pat"]."</td>".
														  "<td>". $row["tel_pat"]."</td>".
														  "<td>". $row["date_rdv"]."</td>".
														  "</tr>";
												  }
											}
											 else {
												  echo '<div class="alert alert-danger alert-dismissible" role="alert">
												  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												  <i class="fa fa-times-circle"></i>There are no patients in this service.
												  </div>';   }
											?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE NO PADDING -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Emergency Intensive Care</h3>
								</div>
								<div class="panel-body">
								<table class="table">
										<thead>
											<tr class="active">
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Birthday</th>
												<th>Phone</th>
												<th>Date Appointment </th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$i=1;
											 $query = "SELECT  patent.ID_pat,patent.pre_pat, patent.nom_pat,patent.date_niss_pat,rendez_vous.objt_rdv, rendez_vous.date_rdv,rendez_vous.date_rdv2,patent.tel_pat
											 FROM patent
											 INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE `objt_rdv` = 'Emergency Intensive Care' ";
											 $result = mysqli_query($conn, $query);
											
											if(mysqli_num_rows($result) > 0){
												 while($row = mysqli_fetch_assoc($result)){
														  echo 
														  '<th> '.$i++ ."</th>".
														  "<td>". $row["pre_pat"]."</td>".
														  "<td>". $row["nom_pat"]."</td>".
														  "<td>". $row["date_niss_pat"]."</td>".
														  "<td>". $row["tel_pat"]."</td>".
														  "<td>". $row["date_rdv"]."</td>".
														  "</tr>";
												  }
											}
											 else {
												  echo '<div class="alert alert-danger alert-dismissible" role="alert">
												  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												  <i class="fa fa-times-circle"></i> There are no patients in this service.
												  </div>';   }
											?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE STRIPED -->
						</div>
						<div class="col-md-12">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Vascular Medicine and Call Vascular</h3>
								</div>
								<div class="panel-body">
								<table class="table">
										<thead>
											<tr class="active">
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Birthday</th>
												<th>Phone</th>
												<th>Date Appointment </th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$i=1;
											 $query = "SELECT  patent.ID_pat,patent.pre_pat, patent.nom_pat,patent.date_niss_pat,rendez_vous.objt_rdv, rendez_vous.date_rdv,rendez_vous.date_rdv2,patent.tel_pat
											 FROM patent
											 INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE `objt_rdv` = 'Vascular Medicine and Call Vascular' ";
											 $result = mysqli_query($conn, $query);
											
											if(mysqli_num_rows($result) > 0){
												 while($row = mysqli_fetch_assoc($result)){
														  echo 
														  '<th> '.$i++ ."</th>".
														  "<td>". $row["pre_pat"]."</td>".
														  "<td>". $row["nom_pat"]."</td>".
														  "<td>". $row["date_niss_pat"]."</td>".
														  "<td>". $row["tel_pat"]."</td>".
														  "<td>". $row["date_rdv"]."</td>".
														  "</tr>";
												  }
											}
											 else {
												  echo '<div class="alert alert-danger alert-dismissible" role="alert">
												  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												  <i class="fa fa-times-circle"></i> There are no patients in this service.
												  </div>';   }
											?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- BORDERED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Medical analysis laboratory</h3>
								</div>
								<div class="panel-body">
								<table class="table">
										<thead>
											<tr class="active">
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Birthday</th>
												<th>Phone</th>
												<th>Date Appointment </th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$i=1;
											 $query = "SELECT  patent.ID_pat,patent.pre_pat, patent.nom_pat,patent.date_niss_pat,rendez_vous.objt_rdv, rendez_vous.date_rdv,rendez_vous.date_rdv2,patent.tel_pat
											 FROM patent
											 INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE `objt_rdv` = 'Medical analysis laboratory' ";
											 $result = mysqli_query($conn, $query);
											
											if(mysqli_num_rows($result) > 0){
												 while($row = mysqli_fetch_assoc($result)){
														  echo 
														  '<th> '.$i++ ."</th>".
														  "<td>". $row["pre_pat"]."</td>".
														  "<td>". $row["nom_pat"]."</td>".
														  "<td>". $row["date_niss_pat"]."</td>".
														  "<td>". $row["tel_pat"]."</td>".
														  "<td>". $row["date_rdv"]."</td>".
														  "</tr>";
												  }
											}
											 else {
												  echo '<div class="alert alert-danger alert-dismissible" role="alert">
												  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												  <i class="fa fa-times-circle"></i> There are no patients in this service.
												  </div>';   }
											?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END BORDERED TABLE -->
						</div>
						<div class="col-md-12">
							<!-- CONDENSED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Dental Surgery</h3>
								</div>
								<div class="panel-body">
								<table class="table">
										<thead>
											<tr class="active">
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Birthday</th>
												<th>Phone</th>
												<th>Date Appointment </th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$i=1;
											 $query = "SELECT patent.ID_pat,patent.pre_pat, patent.nom_pat,patent.date_niss_pat,rendez_vous.objt_rdv, rendez_vous.date_rdv,rendez_vous.date_rdv2,patent.tel_pat
											 FROM patent
											 INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE `objt_rdv` = 'Dental Surgery' ";
											 $result = mysqli_query($conn, $query);
											
											if(mysqli_num_rows($result) > 0){
												 while($row = mysqli_fetch_assoc($result)){
														  echo 
														  '<th> '.$i++ ."</th>".
														  "<td>". $row["pre_pat"]."</td>".
														  "<td>". $row["nom_pat"]."</td>".
														  "<td>". $row["date_niss_pat"]."</td>".
														  "<td>". $row["tel_pat"]."</td>".
														  "<td>". $row["date_rdv"]."</td>".
														  "</tr>";
												  }
											}
											 else {
												  echo '<div class="alert alert-danger alert-dismissible" role="alert">
												  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												  <i class="fa fa-times-circle"></i> There are no patients in this service.
												  </div>';   }
											?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END CONDENSED TABLE -->
						</div>
					</div>
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
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>

