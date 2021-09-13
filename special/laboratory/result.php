<?php
session_start();
if (isset($_SESSION["ID_sec"]) && isset($_SESSION["nom_sec"])  && isset($_SESSION["pre_sec"])  && isset($_SESSION["email"])) {
	$id_sec = $_SESSION["ID_sec"];
  }else{
	header('Location: Login/index/index_login.php');
	exit();
  }
include_once "include/conn_db.php";							
?>
<a href="include/conn_db.php"></a>
<!doctype html>
<html lang="en">
<head>
	<title>Analysis Result</title>
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
	<link rel="stylesheet" href="assets/style CSS/style.css">
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
						<li><a href="index.php" class=""><i class="fa fa-flask"></i> <span>Laboratory</span></a></li>
						<li><a href="result.php" class="active"><i class="fa fa-envelope-o"></i> <span>Analysis Result</span></a></li>
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
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
								<?php //include "include/uplodefile.php";?>
									<h3 class="panel-info">Please enter patient information to submit analysis</h3>
								</div>
								<div class="panel-body">
									<form action="include/uplodefile.php" method="POST" enctype="multipart/form-data">
										<div class="form-row">
											<div class="form-group col-md-4">
											  <input type="text" class="form-control input_style" name="id_cons" placeholder="Enter ID Consuiltaion" required>
											</div>
											<div class="form-group col-md-4">
											  <input type="date" class="form-control input_style" name="date_analysis" min="<?php echo date("Y-m-d"); ?>"  required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-12 input_file">
											<label style="font-family: 'Courier New', Courier, monospace;">Please File in <i class="fa fa-file-pdf-o"></i> PDF</label>
												<input type="file" class="form-control input_file_style"name="file"  required>
												
											</div>
										</div>
										
										  <button type="submit" name="send_analyse" class="btn btn-primary btn-lg btn-block">Send</button>
									</form>
								</div>
							</div>
							<!-- END ALERT MESSAGES -->
						</div>
					</div>
					<!-- End  -->
					<!-- START -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
							<div class="panel-heading">
									<h3 class="panel-info">Confirmation of patient information</h3>
								</div>
								<!-- start Code PHP -->
								<table class="table table-striped">
    								<thead>
    								  <tr>
									  	<th>ID Consultation</th>
    								    <th>ID Analysis</th>
    								    <th>First Name</th>
    								    <th>Last Name</th>
										<th>sName File</th>
										<th>Date Resulta</th>
										<th>View Analyse</th>
										<th>download Analyse</th>
    								  </tr>
    								</thead>
    								<tbody>
								<?php
									$sql = "SELECT resultaa.id, resultaa.id_cons, resultaa.resulta_analyse, resultaa.date, ordonnance.id_cons, ordonnance.nom_pat,ordonnance.pre_pat 
									FROM resultaa
									 INNER JOIN ordonnance ON resultaa.id_cons = ordonnance.id_cons";
									$result = mysqli_query($conn, $sql);
									
									if (mysqli_num_rows($result) > 0) {
									  // output data of each row
									  while($row = mysqli_fetch_assoc($result)) {
										  echo '<tr>'.
										 				  "<td>". $row["id_cons"] ."</td>".
														  "<td>". $row["id"] ."</td>".
														  "<td>". $row["nom_pat"]  ."</td>".
														  "<td>". $row["pre_pat"]  ."</td>".
														  "<td>". $row["resulta_analyse"]."</td>".
														  "<td>". $row["date"]."</td>".
											  			  "<td>";?><a target='_blank' href='confirm.php?id_analyse=<?php echo $row["id"] ; ?>'>View</a></td>
															<td><a target='_blank' href="download.php?id_analyse=<?php echo $row["id"] ; ?>"><button type="submit" name="send_analyse" class="btn btn-primary btn-lg ">Download</button></a></td>
														<?php "</td>".'</tr>';

										 
										
									  }
									} else {
									  echo "0 results";
									}
								?>
									</tbody>
								</table>
								
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
	<script src="assets/scripts/klorofil-common.js"></script>
</body>
<a href=""></a>
<a href="http://" target="_blank" rel="noopener noreferrer"></a>
</html>
