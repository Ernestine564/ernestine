
<?php
include('connect.php');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into Student 
(First_name,Last_name,Class) values
('$_POST[first]','$_POST[last]','$_POST[class]')";


if ($conn->query($sql) === TRUE) {
 	echo "Registration  is sucessfully";
} else {
  echo "Same thing is wrong ".$conn->error ;
}

$conn->close();
?>


