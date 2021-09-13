<?php 
session_start();
include_once "../Code PHP/index-code.php";



?>

<!-- ******************************************************* Start Code Html for Sing Up ********************************************************************************** -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style CSS/style_singup.css">
    <link rel="stylesheet" href="../style CSS/style_singupPhone.css">
    <!-- ICONS -->
	<link rel="Logo Alaman.png" sizes="76x76" href="../photo/Logo Alaman.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../photo/Logo Alaman.png">
    
    <title>Sign Up</title>
</head>
<body>
    <!-- <a href="../../login/Code PHP/index_login.php"></a> -->
    <!-- <a href="../Code PHP/index-code.php"></a> -->
<div class="container">
        <div class="header">
            <h1>Sign Up</h1>
        <p>It's quick and easy, create your account quickly.</p>
        <p>If you have an account, <a href="../../login/public HTML/index_login.php">Log In now</a></p>
        </div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="form" class="form">
        <div class="input_field">
            <div class="form-control">
                <i class='fa fa-user'></i>
                <input type="text" name="fname"  placeholder="First Name" id="LastName" required>
                
            </div>
            <div class="form-control">
                <i class='fa fa-user'></i>
                <input type="text"name="lname"  placeholder="Last Name" id="FirstName" required>    
            </div>
            <div class="form-control">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <input type="date" name="birthday" id="datenaissance" required>        
            </div>
            <div class="form-control">
            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                <input type="text" name="address"   id="datenaissance" placeholder="Enter Your Adress" required>        
            </div>    
            <div class="form-control">
                <select name="gender" id="gender" required>
                    <option value="" selected disabled>Select Gender</option>
                     <option value="Man" >Man</option>
                     <option value="Woman" >Woman</option>
               </select>
            </div>
            <div class="form-control">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input type="tel" name="phone" id="phone" pattern="[0-9]{2}[0-9]{8}" placeholder="Numbre phone" required>
            </div>
            <div class="form-control">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter Your Email" id="email" required>
            </div>
            <div class="form-control">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                <input type="password" onkeyup='check();' name="password" id="password" placeholder="Password" id="password" required>
            </div>
            <span style="color: #e74c3c;font-size: 18px; margin-left: -130px;"> <?php echo  $passwordErr;?></span >
            <div class="form-control">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                <input type="password" onkeyup='check();' name="password2" id="confirm_password" placeholder="Confirm Password"  required>
            </div>
            <span style="color: #e74c3c;font-size: 18px; margin-left: -130px;"> <?php echo $passwordErr;?></span >
            <div class="alert alert-success mt-4" id='message' role="alert" ></div>
            <button type="submit" name="submit" id="submit" value="submit">Sign Up </button>
        </div>
    </form>
        <div class="photo-sing">
            <img src="../photo/undraw_doctor_kw5l.svg" alt="svg">
        </div>
       
    </div>
<script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Good The password matches';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Enter The same password, Please!';
  }
}

</script>

</body>
</html> 



