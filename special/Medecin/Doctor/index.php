<?php 
session_start();
if (isset($_SESSION["ID_med"]) && isset($_SESSION["nom_med"])  && isset($_SESSION["pre_med"])  && isset($_SESSION["email_med"])) {
  $id_med = $_SESSION["ID_med"];
}else{
  header('Location: Login/index/index_login.php');
  exit();
}
include_once "Code PHP/conn/conn_db.php";
?>
<a href="Login/index/index_login.php"></a>
<!doctype html>
<html lang="en">
  <head>
    <title>Home | EL-AMEN</title>
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
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
  </head>
  <body>

<div id="wrapper">
  <!-- Start NAVBAR TOP-->
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
            <!-- <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">Mohames</a> -->
            
          </li>
          <!-- profi Admin ******* -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="photo/Logo Alaman.png" class="img-circle" alt="Logo"> <span><?php echo $_SESSION["nom_med"];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="profil.php"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
              <li><a href="message.php"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
              <li><a href="Code PHP/include/logout/logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- END NAVBAR TOP-->
  <!-- LEFT SIDEBAR NAVBAR-->
  <div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
      <nav>
        <ul class="nav">
          <li><a href="index.php" class="active"><i class="fa fa-book"></i> <span>Appointment</span></a></li>
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
<!-- END LEFT SIDEBAR NAVBAR -->
<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <!-- START HELLO -->
      <div style="background-color: rgb(255, 255, 252);" class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Hello Dr <?php echo $_SESSION["nom_med"]  ." ".$_SESSION["pre_med"] ?> </h1>
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

      <!-- Start *** Patient Appointments Cardoyloge -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="text-info">Examining The Patient </h3><br>
									<h3 class="panel-title"> cardiology </h3>
								</div>
								<div class="panel-body">
                  
                    <h3 style="text-align: center;" class="display-3">Add a patient</h3>
                        <div class="panel-body">
                          <table class="table table-striped">
                            <thead>
                              <tr class="info">
                                <th>#</th>
                                <th>ID Patient</th>
                                <th>ID APP</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
												        <th>Birthday</th>
												        <th>Phone</th>
                                <th>Examining </th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $date_res = '';
                            $date_res = date("Y/m/d");
                             if (isset($_POST["Date"])) {
                              $date_res = $_POST["date_app"];
                            }
											$i=1;
											 $query = "SELECT patent.ID_pat,patent.nom_pat, patent.pre_pat, patent.date_niss_pat,patent.tel_pat, rendez_vous.ID_RDv,rendez_vous.objt_rdv,rendez_vous.date_rdv,rendez_vous.date_rdv2, rendez_vous.ID_sec 
                        FROM patent
                         INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE objt_rdv = 'Cardiology' AND date_rdv2= '$date_res' AND ID_sec > 0;";
                      //  `objt_rdv` = 'Cardiology'
											 $result = mysqli_query($conn, $query);
                       
                      
											if(mysqli_num_rows($result) > 0){
												 while($row = mysqli_fetch_assoc($result)){
														  echo 
														  '<th> '.$i++ ."</th>".
														  "<td>". $row["ID_pat"]  ."</td>".
														  "<td>". $row["ID_RDv"]  ."</td>".
														  "<td>". $row["nom_pat"] ."</td>".
														  "<td>". $row["pre_pat"] ."</td>".
                              "<td>". $row["date_niss_pat"]."</td>".
														  "<td>". $row["tel_pat"]."</td>".
                              "<td>"?>
                              
                              <a href="examining.php?id_app=<?php echo $row["ID_RDv"];?>&id_patient=<?php echo $row["ID_pat"]; ?>">
                              <button type="button" class="btn btn-success">Examining</button></a>

                              <?php echo "</td>".
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
							</div>
						</div>
					</div>
				<!-- END *** Patient Appointments -->

         <!-- Start *** Patient Appointments Radiology Specialized Medical imaging -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="text-info">Examining The Patient </h3><br>
									<h3 class="panel-title"> Radiology Specialized Medical imaging </h3>
								</div>
								<div class="panel-body">
                  
                    <h3 style="text-align: center;" class="display-3">Add a patient</h3>
                        <div class="panel-body">
                          <table class="table table-striped">
                            <thead>
                              <tr class="info">
                                <th>#</th>
                                <th>ID Patient</th>
                                <th>ID APP</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
												        <th>Birthday</th>
												        <th>Phone</th>
                                <th>Examining </th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
											$i=1;
											 $query = "SELECT patent.ID_pat,patent.nom_pat, patent.pre_pat, patent.date_niss_pat,patent.tel_pat, rendez_vous.ID_RDv,rendez_vous.objt_rdv,rendez_vous.date_rdv,rendez_vous.date_rdv2, rendez_vous.ID_sec 
                       FROM patent
                        INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE objt_rdv = 'Radiology Specialized Medical imaging' AND date_rdv2= '$date_res' AND ID_sec > 0;";
                      //  `objt_rdv` = 'Cardiology'
											 $result = mysqli_query($conn, $query);
                       
                      
											if(mysqli_num_rows($result) > 0){
												 while($row = mysqli_fetch_assoc($result)){
														  echo 
														  '<th> '.$i++ ."</th>".
														  "<td>". $row["ID_pat"]  ."</td>".
														  "<td>". $row["ID_RDv"]  ."</td>".
														  "<td>". $row["nom_pat"] ."</td>".
														  "<td>". $row["pre_pat"] ."</td>".
                              "<td>". $row["date_niss_pat"]."</td>".
														  "<td>". $row["tel_pat"]."</td>".
                              "<td>"?>
                              
                              <a href="examining.php?id_app=<?php echo $row["ID_RDv"] ; ?>&id_patient=<?php echo $row["ID_pat"]; ?>">
                              <button type="button" class="btn btn-success">Examining</button></a>

                              <?php echo "</td>".
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
							</div>
						</div>
					</div>
				<!-- END *** Patient Appointments Radiology Specialized Medical imaging-->

         <!-- Start *** Patient Appointments Emergency Intensive Care -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="text-info">Examining The Patient </h3><br>
									<h3 class="panel-title"> Emergency Intensive Care </h3>
								</div>
								<div class="panel-body">
                  
                    <h3 style="text-align: center;" class="display-3">Add a patient</h3>
                        <div class="panel-body">
                          <table class="table table-striped">
                            <thead>
                              <tr class="info">
                                <th>#</th>
                                <th>ID Patient</th>
                                <th>ID APP</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
												        <th>Birthday</th>
												        <th>Phone</th>
                                <th>Examining </th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
											$i=1;
											 $query = "SELECT patent.ID_pat,patent.nom_pat, patent.pre_pat, patent.date_niss_pat,patent.tel_pat, rendez_vous.ID_RDv,rendez_vous.objt_rdv,rendez_vous.date_rdv,rendez_vous.date_rdv2, rendez_vous.ID_sec 
                       FROM patent
                        INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE objt_rdv = 'Emergency Intensive Care' AND date_rdv2= '$date_res' AND ID_sec > 0;";
                      //  `objt_rdv` = 'Cardiology'
											 $result = mysqli_query($conn, $query);
                       
                      
											if(mysqli_num_rows($result) > 0){
												 while($row = mysqli_fetch_assoc($result)){
														  echo 
														  '<th> '.$i++ ."</th>".
														  "<td>". $row["ID_pat"]  ."</td>".
														  "<td>". $row["ID_RDv"]  ."</td>".
														  "<td>". $row["nom_pat"] ."</td>".
														  "<td>". $row["pre_pat"] ."</td>".
                              "<td>". $row["date_niss_pat"]."</td>".
														  "<td>". $row["tel_pat"]."</td>".
                              "<td>"?>
                              
                              <a href="examining.php?id_app=<?php echo $row["ID_RDv"] ; ?>&id_patient=<?php echo $row["ID_pat"]; ?>">
                              <button type="button" class="btn btn-success">Examining</button></a>

                              <?php echo "</td>".
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
							</div>
						</div>
					</div>
				<!-- END *** Patient Appointments Emergency Intensive Care-->

         <!-- Start *** Patient Appointments Medical analysis laboratory -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="text-info">Examining The Patient </h3><br>
									<h3 class="panel-title"> Medical analysis laboratory </h3>
								</div>
								<div class="panel-body">
                  
                    <h3 style="text-align: center;" class="display-3">Add a patient</h3>
                        <div class="panel-body">
                          <table class="table table-striped">
                            <thead>
                              <tr class="info">
                                <th>#</th>
                                <th>ID Patient</th>
                                <th>ID APP</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
												        <th>Birthday</th>
												        <th>Phone</th>
                                <th>Examining </th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
											$i=1;
											 $query = "SELECT patent.ID_pat,patent.nom_pat, patent.pre_pat, patent.date_niss_pat,patent.tel_pat, rendez_vous.ID_RDv,rendez_vous.objt_rdv,rendez_vous.date_rdv,rendez_vous.date_rdv2, rendez_vous.ID_sec 
                       FROM patent
                        INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE objt_rdv = 'Medical analysis laboratory' AND date_rdv2= '$date_res' AND ID_sec > 0;";
											 $result = mysqli_query($conn, $query);
                    
											if(mysqli_num_rows($result) > 0){
												 while($row = mysqli_fetch_assoc($result)){
														  echo 
														  '<th> '.$i++ ."</th>".
														  "<td>". $row["ID_pat"]  ."</td>".
														  "<td>". $row["ID_RDv"]  ."</td>".
														  "<td>". $row["nom_pat"] ."</td>".
														  "<td>". $row["pre_pat"] ."</td>".
                              "<td>". $row["date_niss_pat"]."</td>".
														  "<td>". $row["tel_pat"]."</td>".
                              "<td>"?>
                              
                              <a href="examining.php?id_app=<?php echo $row["ID_RDv"] ; ?>&id_patient=<?php echo $row["ID_pat"]; ?>">
                              <button type="button" class="btn btn-success">Examining</button></a>

                              <?php echo "</td>".
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
							</div>
						</div>
					</div>
				<!-- END *** Patient Appointments Medical analysis laboratory-->

         <!-- Start *** Patient Appointments Dental Surgery -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="text-info">Examining The Patient </h3><br>
									<h3 class="panel-title"> Dental Surgery </h3>
								</div>
								<div class="panel-body">
                  
                    <h3 style="text-align: center;" class="display-3">Add a patient</h3>
                        <div class="panel-body">
                          <table class="table table-striped">
                            <thead>
                              <tr class="info">
                                <th>#</th>
                                <th>ID Patient</th>
                                <th>ID APP</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
												        <th>Birthday</th>
												        <th>Phone</th>
                                <th>Examining </th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
											$i=1;
											 $query = "SELECT patent.ID_pat,patent.nom_pat, patent.pre_pat, patent.date_niss_pat,patent.tel_pat, rendez_vous.ID_RDv,rendez_vous.objt_rdv,rendez_vous.date_rdv,rendez_vous.date_rdv2, rendez_vous.ID_sec 
                       FROM patent
                        INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE objt_rdv = 'Dental Surgery' AND date_rdv2= '$date_res' AND ID_sec > 0;";
                      //  `objt_rdv` = 'Cardiology'
											 $result = mysqli_query($conn, $query);
                       
                      
											if(mysqli_num_rows($result) > 0){
												 while($row = mysqli_fetch_assoc($result)){
														  echo 
														  '<th> '.$i++ ."</th>".
														  "<td>". $row["ID_pat"]  ."</td>".
														  "<td>". $row["ID_RDv"]  ."</td>".
														  "<td>". $row["nom_pat"] ."</td>".
														  "<td>". $row["pre_pat"] ."</td>".
                              "<td>". $row["date_niss_pat"]."</td>".
														  "<td>". $row["tel_pat"]."</td>".
                              "<td>"?>
                              
                              <a href="examining.php?id_app=<?php echo $row["ID_RDv"] ; ?>&id_patient=<?php echo $row["ID_pat"]; ?>">
                              <button type="button" class="btn btn-success">Examining</button></a>

                              <?php echo "</td>".
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
							</div>
						</div>
					</div>
				<!-- END *** Patient Appointments Dental Surgery -->

         <!-- Start *** Patient Appointments Vascular Medicine and Call Vascular -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="text-info">Examining The Patient </h3><br>
									<h3 class="panel-title"> Vascular Medicine and Call Vascular </h3>
								</div>
								<div class="panel-body">
                  
                    <h3 style="text-align: center;" class="display-3">Add a patient</h3>
                        <div class="panel-body">
                          <table class="table table-striped">
                            <thead>
                              <tr class="info">
                                <th>#</th>
                                <th>ID Patient</th>
                                <th>ID APP</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
												        <th>Birthday</th>
												        <th>Phone</th>
                                <th>Examining </th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
											$i=1;
											 $query = "SELECT patent.ID_pat,patent.nom_pat, patent.pre_pat, patent.date_niss_pat,patent.tel_pat, rendez_vous.ID_RDv,rendez_vous.objt_rdv,rendez_vous.date_rdv,rendez_vous.date_rdv2, rendez_vous.ID_sec 
                       FROM patent
                        INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE objt_rdv = 'Vascular Medicine and Call Vascular' AND date_rdv2= '$date_res' AND ID_sec > 0;";
                      //  `objt_rdv` = 'Cardiology'
											 $result = mysqli_query($conn, $query);
                       
                      
											if(mysqli_num_rows($result) > 0){
												 while($row = mysqli_fetch_assoc($result)){
														  echo 
														  '<th> '.$i++ ."</th>".
														  "<td>". $row["ID_pat"]  ."</td>".
														  "<td>". $row["ID_RDv"]  ."</td>".
														  "<td>". $row["nom_pat"] ."</td>".
														  "<td>". $row["pre_pat"] ."</td>".
                              "<td>". $row["date_niss_pat"]."</td>".
														  "<td>". $row["tel_pat"]."</td>".
                              "<td>"?>
                              
                              <a href="examining.php?id_app=<?php echo $row["ID_RDv"] ; ?>&id_patient=<?php echo $row["ID_pat"]; ?>">
                              <button type="button" class="btn btn-success">Examining</button></a>

                              <?php echo "</td>".
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
							</div>
						</div>
					</div>
				<!-- END *** Patient Appointments Vascular Medicine and Call Vascular-->

        
    </div>
  </div>
  <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->




</div>


 


    <!-- Javascript -->
	<script src="css/vendor/jquery/jquery.min.js"></script>
	<script src="css/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="css/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="css/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="css/vendor/chartist/js/chartist.min.js"></script>
	<script src="css/scripts/klorofil-common.js"></script>
	<script src="css/vendor/toastr/toastr.min.js"></script>

  </body>
</html>