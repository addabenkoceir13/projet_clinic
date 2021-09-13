<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["message"])) {
        $fname   = test_input(ucfirst($_POST["fname"]));
        $lname   = test_input(ucfirst($_POST["last"]));
        $email   = test_input($_POST["phone"]);
        $phone   = test_input($_POST["email"]);
        $message = test_input($_POST["message"]);

$sql = "INSERT INTO message SET fname = '$fname' , lname = '$lname',  phone = '$email', email = '$phone', message = '$message'";

     if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } 
      else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      header('Location: index_Home.php');
      exit();

        
    }
}  


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  mysqli_close($conn);
?>