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
	<title>Medicale | EL AMEN</title>
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
						<li><a href="adda.php" class=""><i class="fa fa-plus-square-o"></i> <span>Add-ons</span></a></li>
						<li><a href="medical.php" class="active"><i class="fa fa-stethoscope"></i> <span>List Medicale</span></a></li>
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
					<h3 class="page-title">Addition of Medicine</h3>
					<div class="panel panel-headline">
					  <div class="panel-body">
					  <table class="table">
							<thead class="thead-light">
							  <tr>
								<th>ID</th>
								<th>Name Medicine</th>
								<th>Quantity</th>
								<th>Times</th>
								<th>Medicine Type</th>
								<th>Delete</th>
							  </tr>
							</thead>
							<tbody>
								<!-- Start Code php -->
							<?php
								$query = "SELECT medicament.id_medic , medicament.nom_medic,medicament.type_medic, posologie.quantite, posologie.posologie , posologie.id 
								FROM medicament 
								INNER JOIN posologie ON medicament.id_medic = posologie.id_medic  ";
								$result = mysqli_query($conn, $query);
								   if(mysqli_num_rows($result) > 0){
									  while($row = mysqli_fetch_assoc($result)){
										  $id1 = $row["id_medic"];
										  $id2 = $row["id"];
											  echo 
											  "<td>". $row["id_medic"]  ."</td>".
											  "<td>". $row["nom_medic"]  ."</td>".
											  "<td>". $row["quantite"]  ."</td>".
											  "<td>". $row["posologie"]  ."</td>".
											  "<td>". $row["type_medic"]."</td>";?>
											 <td> 
											  <a href="include/Delete/delete_medical.php?id1=<?php echo $id1;?>&id2=<?php echo $id2;?>">
											  <button  type="submit" class="btn btn-danger btn-toastr" data-context="error" data-message="Successefully Deleted" data-position="top-right"><i class="fa fa-trash"></i></button></a>
											 </td>
											 <?php
											 echo "</tr>";  
										}
								  }else {echo '<div class="alert alert-danger alert-dismissible" role="alert">this dose not exist </div>' ;}	
							?> 
							<!-- End Code PHP -->				
							</tbody>
						</table>
					</div>
				</div>	
			</div>
			</div>
			<!-- END MAIN CONTENT -->

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Medical Tests</h3>
				   <div class="panel panel-headline">
					 <div class="panel-body">
					<table class="table">
							<thead class="thead-light">
							  <tr>
								<th>ID</th>
								<th> Name Analysi</th>
								<th>Delete</th>
							  </tr>
							</thead>
							<tbody>
								<!-- Start Code php -->
							<?php
								$query = "SELECT * FROM `analyse` ";
								$result = mysqli_query($conn, $query);
								   if(mysqli_num_rows($result) > 0){
									  while($row = mysqli_fetch_assoc($result)){
										  $id2 = $row["Id_ana"];
											  echo 
											  "<td>". $row["Id_ana"]  ."</td>".
											  "<td>". $row["name_ana"]."</td>";?>
											 <td> 
											  <a href="include/Delete/delete_analyse.php?id2=<?php echo $id2;?>">
											  <button  type="submit" class="btn btn-danger btn-toastr" data-context="error" data-message="Successefully Deleted" data-position="top-right"><i class="fa fa-trash"></i></button></a>
											 </td>
											 <?php
											 echo "</tr>";  
										}
								  }else {echo '<div class="alert alert-danger alert-dismissible" role="alert">this dose not exist </div>' ;}	
							?> 
							<!-- End Code PHP -->				
							</tbody>
						</table>
					</div>
				  </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Medical Scans</h3>
					<div class="panel panel-headline">
					<div class="panel-body">
					<table class="table">
						<thead class="thead-light">
							  <tr>
								<th>ID</th>
								<th> Name Scans</th>
								<th>Delete</th>
							  </tr>
							</thead>
							<tbody>
								<!-- Start Code php -->
							<?php
								$query = "SELECT * FROM `radio` ";
								$result = mysqli_query($conn, $query);
								   if(mysqli_num_rows($result) > 0){
									  while($row = mysqli_fetch_assoc($result)){
										  $id3 = $row["id_radio"];
											  echo 
											  "<td>". $row["id_radio"]  ."</td>".
											  "<td>". $row["name_scan"]."</td>";?>
											 <td> 
											  <a href="include/Delete/delet_scan.php?id3=<?php echo $id3;?>">
											  <button name="scan" type="submit" class="btn btn-danger btn-toastr" data-context="error" data-message="Successefully Deleted" data-position="top-right"><i class="fa fa-trash"></i></button></a>
											 </td>
											 <?php
											 echo "</tr>";  
										}
								  }else {echo '<div class="alert alert-danger alert-dismissible" role="alert">this dose not exist </div>' ;}	
							?> 
							<!-- End Code PHP -->	
							
							<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Medical Tests</h3>
				   <div class="panel panel-headline">
					 <div class="panel-body">
					<table class="table">
							<thead class="thead-light">
							  <tr>
								<th>ID</th>
								<th> Name Services</th>
								<th>Delete</th>
							  </tr>
							</thead>
							<tbody>
								<!-- Start Code php -->
							<?php
								$query = "SELECT * FROM `service` ";
								$result = mysqli_query($conn, $query);
								   if(mysqli_num_rows($result) > 0){
									  while($row = mysqli_fetch_assoc($result)){
										  $id4 = $row["ID_srv"];
											  echo 
											  "<td>". $row["ID_srv"]  ."</td>".
											  "<td>". $row["nom_srv"]."</td>";?>
											 <td> 
											  <a href="include/Delete/delet_service.php?id4=<?php echo $id4;?>">
											  <button  type="submit" class="btn btn-danger btn-toastr" data-context="error" data-message="Successefully Deleted" data-position="top-right"><i class="fa fa-trash"></i></button></a>
											 </td>
											 <?php
											 echo "</tr>";  
										}
								  }else {echo '<div class="alert alert-danger alert-dismissible" role="alert">this dose not exist </div>' ;}	
							?> 
							<!-- End Code PHP -->				
							</tbody>
						</table>
					</div>
				  </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
							</tbody>
						</table>
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
	<script src="assets/vendor/toastr/toastr.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
