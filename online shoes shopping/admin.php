
<?php
include('connect.php');

$sql = "insert into registration
(firstname,lastname,gender,email,location) values ('$_POST[firstname]','$_POST[lastname]','$_POST[gender]','$_POST[email]','$_POST[location]')";

if ($conn->query($sql) === TRUE) {
 	echo "Registration  is sucessfully";
} else {
  echo "Same thing is wrong ".$conn->error ;
}

$conn->close();
?>


