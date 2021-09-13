<?php   
session_start();
if ( isset($_SESSION["email"]) && isset($_SESSION['pre_sec']) && isset($_SESSION['nom_sec']) && isset($_SESSION['ID_sec'])) { 
    // header('Location: index.php');
}
else{
	header('Location: ../registation/login/index/index_login.php');
	exit();
}


?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit | EL-AMEN</title>
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
						<li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Appointment</span></a></li>
						<li><a href="appointment.php" class=""><i class="fa fa-plus-circle" aria-hidden="true"></i> <span>Add Appointment</span></a></li>
						<li><a href="editApp.php" class="active"><i class="fa fa-pencil" aria-hidden="true"></i><span>Edit</span></a></li>
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
	<!-- START MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Edit</h3>
			<div class="row">
				<div class="col-md-12">
<!--*********************************************** Start *** Add Appointement Service ************************************************************************-->
					<div class="panel">
						<!-- code PHP -->
					<?php include_once "../include/Edit patient/index_S.php";?>
						<h3 style="text-align: center;" class="display-3">Edit An Appointement</h3>
							<div class="panel-body">
							<form action="index_date.php" method="POST" class="needs-validation" >
										  <div class="form-row">
										    <div style="margin-top: 30px;"  class="col-md-6 mb-3">
												<select name="id_pat" class="form-control input-lg input_style" required>
														<?php  
														include_once "conn_db2.php";
														$Id_pat = $_GET["id_patient"];
														$Id_rdv = $_GET["id_app"];

														$sql2 ="SELECT * FROM `patent` WHERE `ID_pat`= $Id_pat";
														$result = mysqli_query($conn, $sql2);
														if(mysqli_num_rows($result) > 0){
															while($row = mysqli_fetch_assoc($result)){
																echo "<option value='".$row['ID_pat']."'>".$row['nom_pat']." ".$row['pre_pat']."</option>";
														
														?>		
														
												  </select>	 
											</div>
											<div style="margin-top: 30px;" class="col-md-6 mb-3">
												<select name="objt_rdv" class="form-control input-lg input_style" required>
														<option value="" selected disabled>Choose Services</option>
														<option value="Cardiology ">Cardiology</option>
														<option value="Radiology Specialized Medical imaging">Radiology Specialized Medical imaging</option>
														<option value="Emergency Intensive Care">Emergency Intensive Care</option>
														<option value="Vascular Medicine and Call Vascular">Vascular Medicine and Call Vascular</option>
														<option value="Medical analysis laboratory">Medical analysis laboratory</option>
														<option value="Dental Surgery">Dental Surgery</option>
													
												  </select>	 
											</div>
										  </div>
										  <div class="form-row" >
											<div class="col-md-6 mb-3" style="margin-bottom: 50px;">
											  <label for="validationCustom03">Appointment Date:</label>
											  <input type="date" name="date_rdv" min="<?php echo date("Y-m-d") ?>" class="form-control input-lg input_style" id="validationCustom03" required>
											</div>

											<!-- <div class="col-md-6 mb-3 " style="margin-bottom: 50px;">
												<label for="validationCustom03">Appointment Time:</label>
												<input type="time" name="time_rdv" class="form-control input-lg" id="validationCustom03" required>
											  </div> -->
										  </div>
										  <input style="border: none; color:#fff; " type="text" name="ID_RDv" value="<?php echo $_GET["id_app"];?>" >
										  <div >
											
										  <button name="uapdit_app" type="submit" class="btn btn-primary btn-lg btn-block">Edit An Appointement</button>
										</div>
									</form>	
							</div>
					</div>
				</div>
<!--*********************************************** End *** Add Appointement Service ************************************************************************-->	
			</div>
				<!-- END ********************-->
				<div class="row">
				<div class="col-md-12">
<!--*********************************************** Start *** Add Appointement Service ************************************************************************-->
					<div class="panel">
						<!-- code PHP -->
					<?php include_once "../include/Edit patient/index_S.php";?>
						<h3 style="text-align: center;" class="display-3">Edit A Profil Patient</h3>
							<div class="panel-body">
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="needs-validation" >
							<div class="form-row">
									<input style="border: none; color:#fff; " type="text" name="ID_pat" value="<?php echo $_GET["id_patient"];?>" >
											<div class="col-md-6 mb-3">
												<label for="validationDefault01">First Name</label>
												<input type="text" class="form-control input-lg input_style" name="fname" value="<?php echo $row['nom_pat'] ?>" id="validationDefault01" placeholder="Entre Your First Name" required>
											</div>
											  <div style="margin-top: -20px;" class="col-md-6 mb-3">
												<label for="validationDefault02">Last Name</label>
												<input type="text" class="form-control input-lg input_style" name="lname" value="<?php echo $row['pre_pat'] ?>" id="validationDefault02" placeholder="Entre Your Last Name" required>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6 mb-3">
											  <label for="validationCustom03">Birthday</label>
											  <input type="date" class="form-control input-lg input_style" name="birthday" value="<?php echo $row['date_niss_pat'] ?>" id="validationCustom03" required>
											</div>
	 										<div style="margin-top: 30px;" class="col-md-6 mb-3">
												<select name="gender" value="<?php echo $row['sexe_pat'] ?>" class="form-control input-lg" required>
														<option value="<?php echo $row['sexe_pat'] ?>" selected ><?php echo $row['sexe_pat'] ?>"</option>
														<option value="Man">Man</option>
                    									<option value="Woman">Woman</option>
												  </select>	 
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6 mb-3">
												<label for="validationDefault03">Address</label>
												<input type="text" class="form-control input-lg input_style" name="address" value="<?php echo $row['address_pat'] ?>"  id="validationDefault03" placeholder="Entre Your E-mail" required>
											  </div>
											<div class="col-md-6 mb-3">
											  <label for="validationCustom02">Phone</label>
											  <input type="tel" class="form-control input-lg input_style" name="phone" value="<?php echo $row['tel_pat'] ?>"  pattern="[0-9]{2}[0-9]{8}" placeholder="Entre Your Numbre phone"  required>
											</div>
										</div>	
										<div class="form-row">
										    <div class="col-md-6 mb-3">
												<label for="validationDefault03">Email</label>
												<input type="text" class="form-control input-lg input_style" name="email" value="<?php echo $row['email_pat'] ?>"  id="validationDefault03" placeholder="Entre Your E-mail" required>
											  </div>
											<div style="margin-bottom: 30px;" class="col-md-6 mb-3">
												<label for="validationDefault03">Password</label>
												<input type="password" class="form-control input-lg input_style" name="password" value="<?php echo $row['pass_pat'] ?>"  id="validationDefault03" placeholder="Entre Your Password" required>
											</div>
										</div> 
										  <div>
										  	<button style="margin-top: 150px;" type="submit" name="edit_profil" class="btn btn-primary btn-lg btn-block">Edit a patient</button>
										  </div>
									</form>	
							</div>
					</div>
				</div>
<!--*********************************************** End *** Add Appointement Service ************************************************************************-->	
			</div>
				<!-- END ********************-->
				<div class="row">
				<div class="col-md-12">
<!--*********************************************** Start *** Add Appointement Service ************************************************************************-->
					<div class="panel">
						<!-- code PHP -->
					<?php include_once "../include/Edit patient/index_S.php";?>
						<h3 style="text-align: center;" class="display-3">Delete A Profil Patient</h3>
							<div class="panel-body">
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="needs-validation" >
								<div class="form-row">
									<input style="border: none; color:#fff; " type="text" name="ID_pat" value="<?php echo $_GET["id_patient"];?>" >
											<div class="col-md-4 mb-3">
												<label for="validationDefault01">First Name</label>
												<input type="text" class="form-control input-lg input_style" name="fname" value="<?php echo $row['nom_pat'] ?>" id="validationDefault01" placeholder="Entre Your First Name" disabled>
											</div>
											  <div class="col-md-4 mb-3">
												<label for="validationDefault02">Last Name</label>
												<input type="text" class="form-control input-lg input_style" name="lname" value="<?php echo $row['pre_pat'] ?>" id="validationDefault02" placeholder="Entre Your Last Name" disabled>
											</div>
											<div style="margin-top: -20px;" class="col-md-4 mb-3">
											  <label for="validationCustom03">Birthday</label>
											  <input type="date" class="form-control input-lg input_style" name="birthday" value="<?php echo $row['date_niss_pat'] ?>" id="validationCustom03" disabled>
											</div>
								</div>
										
										  <div>
										  	<button style="margin-top: 150px;" type="submit" name="delet_profil" class="btn btn-primary btn-lg btn-block">Delete a patient</button>
										  </div>
									</form>	
							</div>
					</div>
				</div>
<!--*********************************************** End *** Add Appointement Service ************************************************************************-->	
			</div>
				<!-- END ********************-->

<?php 
	}
}
?>

				
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Shared by <i class="fa fa-love"></i><a href="#">EL-AMEN</a>
</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
