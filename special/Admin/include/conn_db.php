<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Create connection
$conn1 = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn1) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully <br>";
 

?>