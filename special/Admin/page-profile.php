<?php
session_start();
if (isset($_SESSION["ID_med"]) && isset($_SESSION["nom_med"])  && isset($_SESSION["pre_med"])  && isset($_SESSION["email_med"])) {
    $id_med = $_SESSION["ID_med"];
  }else{
    header('Location: registation/login/index/index_login.php');
    exit();
  }
 include_once "include/conn_db.php";

 $sql4 = "SELECT * FROM `medecin` WHERE `ID_med` = '$id_med'";
 $result = mysqli_query($conn, $sql4);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc(($result))) {
			
?>

<!doctype html>
<html lang="en">
<head>
	<title>Profile | EL-AMEN</title>
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src=" photo/Logo Alaman.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['nom_med'] ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
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
						<li><a href="medical.php" class=""><i class="fa fa-stethoscope"></i> <span>List Medicale</span></a></li>
						<li><a href="page-profile.php" class="active"><i class="fa fa-user"></i> <span>Profile</span></a></li>
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
					<div class="panel panel-profile">
					   <div class="panel">
					      <div class="panel-body">
						  	<h1 class="display-4">Hello, <?php echo $_SESSION['nom_med']." ".$_SESSION['pre_med'] ?></h1>
							  <h3 class="display-3">Do you Want to modify your profiler?</h3>
						     <form action="include/modify/modify.php" method="POST" class="needs-validation" >
							 	<input style="font-size: 10px; width:0px; color:#fff; border: none;" type="text" name="IDSEC" value="<?php echo $id_med ;?>">
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="validationDefault01">First Name</label>
										<input type="text" class="form-control input-lg input_style" name="fname" id="validationDefault01" value="<?php echo $row["nom_med"] ;?>" required>
									</div>
									  <div class="col-md-6 mb-3">
										<label for="validationDefault02">Last Name</label>
										<input type="text" class="form-control input-lg input_style" name="lname" id="validationDefault02" value="<?php echo $row["pre_med"] ;?>" required>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-3">
									  <label for="validationCustom03">Birthday</label>
									  <input type="date" class="form-control input-lg input_style" name="birthday" id="validationCustom03" value="<?php echo $row["date_med"] ;?>" required>
									</div>
	 								<div style="margin-top: 30px;" class="col-md-6 mb-3">
										<select name="gender" class="form-control input-lg" required>
												<option value="" selected disabled>Choose Gender</option>
												<option value="Man">Man</option>
                    							<option value="Woman">Woman</option>
										  </select>	 
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="validationDefault03">Email</label>
										<input type="text" class="form-control input-lg input_style" name="email"  id="validationDefault03" value="<?php echo $row["email_med"] ;?>" required>
									  </div>
									<div class="col-md-6 mb-3">
									  <label for="validationCustom02">Phone</label>
									  <input type="tel" class="form-control input-lg input_style" name="phone"  pattern="[0-9]{2}[0-9]{8}" value="<?php echo $row["tel_med"] ;?>" required>
									</div>
								</div>	
								<div style="margin-bottom: 30px;" class="col-md-6 mb-3">
									<label for="validationDefault03">Password</label>
									<input type="password" class="form-control input-lg input_style" name="password"  id="validationDefault03" value="<?php echo $row["pssaword_med"] ;?>" required>
								</div> 
								  <div>
								  	<button style="margin-top: 150px;" type="submit" name="modifi" class="btn btn-primary btn-lg btn-block">Modify My Profile</button>
								</div>
							 </form>	
							 <?php
							 }	
							}
							 ?>

					      </div>
					   </div>
							
					</div>
					<!-- END -->
	<div class="panel panel-profile">
	   <div class="panel">
	   		<div class="panel-body">
					  <h3 class="display-3">Add working Days and Times</h3>
					  <form action="include/modify/modify.php" method="POST" class="needs-validation" >
			 				<input style="font-size: 10px; width:0px; color:#fff; border: none;" type="text" name="IDSEC" value="<?php echo $id_med ;?>">
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="validationDefault01">Time Started</label>
									<input type="time" class="form-control input-lg input_style" name="time_s" id="validationDefault01"  required>
								</div>
								  <div class="col-md-6 mb-3">
									<label for="validationDefault02">Expiry Time</label>
									<input type="time" class="form-control input-lg input_style" name="time_e" id="validationDefault02" required>
								</div>
							</div>
							<div class="form-row">
								<h4>Days Working</h4>
								<div class="checkbox">
                                    <label> 
										<input type="checkbox" name="days[]" value="Saturday" class="form-check-input">Saturday
									</label></div>
									<div class="checkbox">
                                    <label> 
										<input type="checkbox" name="days[]" value="Sunday" class="form-check-input">Sunday
									</label></div>
									<div class="checkbox">
                                    <label> 
										<input type="checkbox" name="days[]" value="Monday" class="form-check-input">Monday
									</label></div>
									<div class="checkbox">
                                    <label> 
										<input type="checkbox" name="days[]" value="Tuesday" class="form-check-input">Tuesday
									</label></div>
									<div class="checkbox">
                                    <label> 
										<input type="checkbox" name="days[]" value="Wednesday" class="form-check-input">Wednesday
									</label></div>
									<div class="checkbox">
                                    <label> 
										<input type="checkbox" name="days[]" value="Thursday" class="form-check-input">Thursday
									</label></div>
							</div>
							<button style="margin-top: 50px;" type="submit" name="working" class="btn btn-primary btn-lg btn-block">Working</button>
					  </form>
	   		</div>
	   </div>
	</div>
<!-- END -->
<!-- START -->
	<div class="panel panel-profile">
	   <div class="panel">
	   		<div class="panel-body">
				<h3 class="display-3">Do you Want to modify yourworking Days and Times?</h3>
				<table class="table table-striped">
  					 <thead>
  					   <tr>
  					     <th>ID</th>
  					     <th>Days Working</th>
  					     <th>Time Started</th>
						 <th>Expiry Time</th>
						 <th>Modify</th>
  					   </tr>
  					 </thead>
  					 <tbody>
  					   
  					
<?php
$sql = "SELECT * FROM `calendrier` WHERE `Id_med`= '$id_med' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	  
    echo "<tr><td>".$row["id_cal"]."</td>".
		 "<td>".$row["jour_trav_med"]."</td>".
		 "<td>".$row["heur_d"]."</td>".
		 "<td>".$row["heur_f"]."</td>";?>
		 <td><button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Modify </button></td>
		 <?php 
	 ;
  }
}



?>
 </tbody>
</table>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
  <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modify</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h4>Do you really want to change</h4> 
		  <form action="include/modify/modify.php" method="POST" class="needs-validation" >
				<input style="font-size: 10px; width:0px; color:#fff; border: none;" type="text" name="IDSEC" value="<?php echo $id_med ;?>">
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="validationDefault01">Time Started</label>
					<input type="time" class="form-control input-lg" name="time_sm" id="validationDefault01"  required>
				</div>
				  <div class="col-md-6 mb-3">
					<label for="validationDefault02">Expiry Time</label>
					<input type="time" class="form-control input-lg" name="time_em" id="validationDefault02" required>
				</div>
			</div>
			<div class="form-row">
				<h4>Days Working</h4>
				<div class="checkbox">
                         <label> 
						<input type="checkbox" name="daysm[]" value="Saturday" class="form-check-input">Saturday
					</label></div>
					<div class="checkbox">
                         <label> 
						<input type="checkbox" name="daysm[]" value="Sunday" class="form-check-input">Sunday
					</label></div>
					<div class="checkbox">
                         <label> 
						<input type="checkbox" name="daysm[]" value="Monday" class="form-check-input">Monday
					</label></div>
					<div class="checkbox">
                         <label> 
						<input type="checkbox" name="daysm[]" value="Tuesday" class="form-check-input">Tuesday
					</label></div>
					<div class="checkbox">
                         <label> 
						<input type="checkbox" name="daysm[]" value="Wednesday" class="form-check-input">Wednesday
					</label></div>
					<div class="checkbox">
                         <label> 
						<input type="checkbox" name="daysm[]" value="Thursday" class="form-check-input">Thursday
					</label></div>
			</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			<button   name="modify_work" type="submit"  class="btn btn-primary "> Save Change</button>
        </div>
      </div>
    </div>
  </div> </form>
			 
	   		</div>
	   </div>
	</div>
<!-- END -->
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
</body>

</html>
