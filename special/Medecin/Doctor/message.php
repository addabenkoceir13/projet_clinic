<?php
session_start();
if (isset($_SESSION["ID_med"]) && isset($_SESSION["nom_med"])  && isset($_SESSION["pre_med"])  && isset($_SESSION["email_med"])) {
    $id_med = $_SESSION["ID_med"];
  }
else{
	header('Location: ../registation/login/index/index_login.php');
	exit();
}
 include_once "conn_db.php";
		
?>
<a href=""></a>
<!doctype html>
<html lang="en">
<head>
	<title>Profile | EL-AMEN</title>
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
								<li><a href="index.php"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
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
          <li><a href="index.php" class=""><i class="fa fa-book"></i> <span>Appointment</span></a></li>
          <li>
            <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="subPages" class="collapse ">
              <ul class="nav">
                <li><a href="profil.php" class="">Profile</a></li>
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
					<div class="panel panel-profile">
					   <div class="panel">
					      <div class="panel-body">
						  	
							  <h3 class="display-3">Messages form some visitors to the page</h3>
                              <table class="table table-striped">
                                 <thead>
                                   <tr>
                                     <th>#</th>
                                     <th>First Name</th>
                                     <th>Last Name</th>
                                     <th>Phone</th>
                                     <th>Email</th>
                                     <th>Message</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                         $sql2 ="SELECT * FROM `message` WHERE 1";
											$result = mysqli_query($conn, $sql2);
											if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_assoc($result)){
													echo "<tr>".
                                                    "<td>".$row['id']."</td>".
                                                    "<td>".$row['fname']."</td>".
                                                    "<td>".$row['lname']."</td>".
                                                    "<td>".$row['phone']."</td>".
                                                    "<td>".$row['email']."</td>".
                                                    "<td>".$row['message']."</td>".
                                                    "</tr>";
												}
											}
                                    ?>  
                                 </tbody>
                                </table>
						     
					      </div>
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
