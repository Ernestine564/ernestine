<?php 
include('connect.php');
$user=$_POST["username"];
$pass=$_POST["password"];
$result = mysqli_query($conn,"SELECT password FROM admin where username='".$user."'");

while($row = mysqli_fetch_array($result))
{
	if($row['password']==$pass ){
		echo "<h2>Login as ".$_POST["username"];echo " sucessfully ";
		 echo "<a href='welcome admin.php'>Continue</a>";
		 

} 
else{
	echo "<h2>Filled to login";
		 echo "<a href='admin login.php'>Try again</a>";



}}
mysqli_close($conn);
?>
