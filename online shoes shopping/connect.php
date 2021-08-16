<?php 
$servername = "sql308.epizy.com";
$username = "epiz_29445545";
$password = "vz0TEePeJwX";
$dbname = "epiz_29445545_shopping";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>